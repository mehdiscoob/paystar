<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    protected $fillable = ['imageable_id','imageable_type',"path"];

    public function image()
    {
        return $this->morphTo();
    }

}
