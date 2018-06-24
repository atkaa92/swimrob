<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Not;
use App\Models\Message;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'Админ панель';
        return view('admin')->with(compact('page'));
    }


    public function addProduct()
    {
        $page = 'Добавить продукт';
        return view('add-product')->with(compact('page'));
    }

    public function addProductFunc(Request $request, $id = false)
    {
        $product = $id ? Product::find($id) : new Product();
        $product->name = trim($request->name);
        $product->desc = trim($request->desc);
        $product->price = trim($request->price);
        $product->buyed = 0;

        $product->save();

        if(!$id){
            $images = [];
            foreach($request->file('images') as $media)
            {
                if(!empty($media))
                {
                    if(!file_exists("products/$product->id")){
                        mkdir("products/$product->id",0777, true);
                    }
                    $destinationPath = "products/$product->id";
                    $filename = str_replace(' ', '_', $media->getClientOriginalName());
                    $media->move($destinationPath, $filename);
                    $images[] = [
                        'name' => $filename,
                        'product_id' => $product->id,
                        'general' => 0
                    ];
                }
            }
            $images[0]['general'] = 1;
            Image::insert($images);
        }
        return redirect()->back()->with('response', ['status' => 'success', 'message' => $id ? 'Продукт отредактирован' : 'Продукт добавлен']);
    }

    public function getProducts()
    {
        $products = Product::with(['images' => function($query) {
                                $query->where('general', 1);
                            }])->paginate(20);
        $data = [
            'page' => 'Все продукты',
            'products' => $products
        ];
        return view('getProducts')->with($data);
    }

    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        return redirect()->back();
    }

    public function getProduct($id)
    {
        $product = Product::with(['images'])->find($id);
        $data = [
            'page' => $product->name,
            'product' => $product
        ];
        return view('getProduct')->with($data);
    }
    
    public function deleteCurrentImage()
    {
        if (Image::find(request('myId'))->delete()) {
            return json_encode('V');
        }else{
            return json_encode('X');
        }
    }
    
    public function makeGeneralImage()
    {
        $image = Image::find(request('myId'));
        Image::where('product_id', $image->product_id)->update(['general' => 0 ]);
        $image->general = 1;
        if ($image->save()) {
            return json_encode('V');
        }else{
            return json_encode('X');
        }
    }

    public function addImage($id)
    {
        $images = [];
        foreach(request()->file('images') as $media)
        {
            if(!empty($media))
            {
                $destinationPath = "products/$id";
                $filename = str_replace(' ', '_', $media->getClientOriginalName());
                $media->move($destinationPath, $filename);
                $images[] = [
                    'name' => $filename,
                    'product_id' => $id,
                    'general' => 0
                ];
            }
        }
        Image::insert($images);
        return redirect()->back();
    }

    public function getNotes()
    {
        $notes = Not::with(['product'])->where('viewed', 0)->get();
        $ids =   $likes =  $dislikes = [];
        foreach ($notes->toArray() as $key => $value) {
            $ids[] = $value['id'];
            $likes[$value['product_id']] = Not::where('product_id', $value['product_id'])->where('type', 1)->count();
            $dislikes[$value['product_id']] = Not::where('product_id', $value['product_id'])->where('type', 0)->count();
        }
        Not::whereIn('id',$ids)->update(['viewed' => 1 ]);
        $data = [
            'page' => 'Заметки',
            'notes' => $notes,
            'likes' => $likes,
            'dislikes' => $dislikes
        ];
        return view('notes')->with($data);
    }

    public function getMessages()
    {
        $messages = Message::where('viewed', 0)->get();
        $ids = [];
        foreach ($messages->toArray() as $key => $value) {
            $ids[] = $value['id'];
        }
        Message::whereIn('id',$ids)->update(['viewed' => 1 ]);
        $data = [
            'page' => 'Сообщения',
            'messages' => $messages,
        ];
        return view('messages')->with($data);
    }
}
