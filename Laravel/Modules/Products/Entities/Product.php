<?php

namespace Modules\Products\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Orders\Entities\Order;
use Modules\Orders\Entities\Orderdetail;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['name','price','count'];

    public function order()
    {
        return $this->belongsToMany(Order::class,'orderdetails')->withPivot(['count']);
    }

    public function orderdetails()
    {
        return $this->hasMany(Orderdetail::class);
    }

}
