<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedImages extends Model
{
    function post(){
        return $this->belongsTo('App\Models\Post');
    }
}
