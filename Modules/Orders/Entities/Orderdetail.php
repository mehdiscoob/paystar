<?php

namespace Modules\Orders\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Products\Entities\Product;

class Orderdetail extends Model
{
    use SoftDeletes;

    protected $fillable = ['count','order_id','product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
