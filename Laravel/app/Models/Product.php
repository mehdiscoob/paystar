<?php

namespace App\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes,HasFactory;

    protected $fillable = ['name','price','count'];

    public function order()
    {
        return $this->belongsToMany(Order::class,'orderdetails')->withPivot(['count']);
    }

    public function orderdetails()
    {
        return $this->hasMany(Orderdetail::class);
    }

    public function image()
    {
        return $this->morphMany(Image::class,'imageable');
    }

}
