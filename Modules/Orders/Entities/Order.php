<?php

namespace Modules\Orders\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Payment\Entities\Transaction;
use Modules\Products\Entities\Product;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = ['code','user_id','status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsToMany(Product::class,'orderdetails')->withPivot(['count']);
    }

    public function orderdetails()
    {
        return $this->hasMany(Orderdetail::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

}
