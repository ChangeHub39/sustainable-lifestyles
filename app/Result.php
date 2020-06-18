<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Result extends Model
{

    use EloquentTrait;
    
    protected $guarded = [];

    public $timestamps = true;

    function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}


