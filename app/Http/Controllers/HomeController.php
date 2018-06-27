<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 6/6/18
 * Time: 00:08
 */

namespace App\Http\Controllers;


use App\Models\Not;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->paginate(6);
        return view('welcome')->with(compact('products'));
    }

    public function single($id)
    {
        $product = Product::find($id);
        if(!$product){
            return false;
        }
        return view('single')->with(compact('product'));
    }

    public function backet(Request $request)
    {
        $ids = isset($_COOKIE['products']) ? json_decode($_COOKIE['products']) : [];
        $name = $request->has('name') ? $request->name : '';
        $email = $request->has('email') ? $request->email : '';
        $products = Product::whereIn('id', $ids)->get();
        $total = Product::whereIn('id', $ids)->sum('price');
        $hidefooter = true;
        return view('basket')->with(compact('products', 'name', 'email', 'total', 'hidefooter'));
    }

    public function sendMail(Request $request)
    {
        if (!$request->has('ids') || !$request->has('name') || !$request->has('tel') || !$request->has('counts')) {
            return redirect()->back();
        }
        $email = $request->tel;
        $products = Product::with(['images' => function($query) {
            $query->where('general', 1);
        }])->whereIn('id', $request->ids)->get()->toArray();
        foreach ($products as $key => $value) {
            $products[$key]['count'] = $request['counts'][$key];
            $products[$key]['total'] = $request['counts'][$key] * $products[$key]['price'];
            Product::where('id', $value['id'])->increment('buyed', (int)$request['counts'][$key]);
        }
        $mail_data = [
            'email' => $request->tel,
            'name' => $request->name,
            'products' => $products,
        ];
        Mail::send('mail.mail', $mail_data, function($message){
            // $message->to(env('MAIL_USERNAME'), 'Swim Shop')->subject("Контактная информация!");
            $message->to('atkaa92@gmail.com', 'Swim Shop')->subject("Контактная информация!");
            $message->from(env('MAIL_USERNAME'));
        });
        setcookie('products', '', -1000);
        $message = new Message;
        $message->name =  $request->name;
        $message->email =  $request->tel;
        $message->products =  '';
        $message->viewed =  0;
        $message->save();
        return redirect('/thanks');
    }
}