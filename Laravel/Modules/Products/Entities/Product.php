<?php

namespace Modules\Products\Entities;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Core\Entities\Image;
use Modules\Orders\Entities\Order;
use Modules\Orders\Entities\Orderdetail;

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
    protected static function newFactory()
    {
        return \Modules\Products\Database\factories\ProductFactory::new();
    }
}
