<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function board()
    {
        return $this->hasMany('App\Board');
    }

    public function likes()
    {
        return $this->belongsToMany('App\Like');
    }

    public function like_exists($boardId)
    {
        return $this->likes()->where('board_id', $boardId)->exists();
    }

    public function like($boardId)
    {
        $exist = $this->like_exists($boardId);

        if ($exist) {
            return false;
        } else {
            $this->likes()->attach($boardId);
            return true;
        }
    }

    public function unlike($boardId)
    {
        $exist = $this->like_exists($boardId);

        if ($exist) {
            $this->likes()->detach($boardId);
            return true;
        } else {
            return false;
        }
    }
}
