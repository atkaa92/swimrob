<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 6/6/18
 * Time: 01:03
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Not extends Model
{
    protected $table = 'notifys';

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}