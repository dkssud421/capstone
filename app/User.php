<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  protected $fillable=[
      'name', 'password','email','studentnum',
  ];

  protected $hidden=[
    'password', 'remember_token',
  ];
    public function notices()
    {
        return $this->hasMany(notice::class);
    }
    public function clubs()
    {
        return$this->hasMany(club::class);
    }
}
