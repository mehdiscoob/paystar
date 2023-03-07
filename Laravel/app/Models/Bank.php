<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
use SoftDeletes;

    protected $fillable = [];

    public function users()
    {
        return $this->belongsToMany(User::class,'bank_card_numbers')->withPivot(['cardnumber']);
   }
}
