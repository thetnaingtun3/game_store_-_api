<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'dob', 'image', 'gender','is_admin',
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
    public function feed()
    {
        return $this->hasMany(Feed::class, 'user_id');
    }
    public function comment()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
    public function like()
    {
        return $this->hasOne(Like::class, 'user_id');
    }
    public function isAdmin(){
        return $this->is_admin;
    }
}
