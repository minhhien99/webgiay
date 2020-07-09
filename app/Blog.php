<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function username()
    {
        return $this->belongsTo('App\User',"user_id");
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}