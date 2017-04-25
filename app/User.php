<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Auth\Passwords\CanResetPassword;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Authenticatable {

   protected $fillable = ['fname', 'lname', 'email', 'password', 'isadmin', 'created_at', 'updated_at'];
   protected $table = "users";

public function setPasswordAttribute($password)
{ 
$this->attributes['password'] = bcrypt($password);
}
}
