<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;


        protected $guard = 'admin';


        protected $fillable = [
            'name', 'email', 'password','phone'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

     public function role()
      {
        return $this->belongsToMany(role::class,'role_admins');
       }

}
