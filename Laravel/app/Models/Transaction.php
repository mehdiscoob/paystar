<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = ['status','price','order_id','token'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
