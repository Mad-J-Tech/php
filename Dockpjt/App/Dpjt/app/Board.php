<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $guarded = array('id');


    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function favorite_users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
