<?php

namespace Modules\Payment\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Orders\Entities\Order;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = ['status','price','order_id','token'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
