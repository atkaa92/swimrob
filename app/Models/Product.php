<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 6/5/18
 * Time: 22:41
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function generalImg()
    {
        return $this->images()->where('general', 1)->first()->name;
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($product) {
            $product->images->each->delete();
            rmdir("products/$product->id");
        });
    }
}