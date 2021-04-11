<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = array('id');

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
    public function board()
    {
        return $this->belongsTo('App\Board');
    }
}
