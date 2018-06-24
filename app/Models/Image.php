<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 6/5/18
 * Time: 22:40
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($image) {
            if ('products/'.$image->product_id.'/'.$image->name) {
                unlink('products/'.$image->product_id.'/'.$image->name);
            }
        });
    }
}