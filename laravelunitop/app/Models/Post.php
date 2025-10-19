<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    function  FeaturedImages(){
        return $this->hasOne('App\Models\FeaturedImages'); 
        // taoj ra mqh vs featuredImages
    }

    function user(){
        return $this->belongsTo('App\Models\User');
    }

}
