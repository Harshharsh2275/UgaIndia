<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticate;

class Admin extends Authenticate
{
    //
    use Notifiable;

    protected $gaurd = "admins";

    //protected $rememberTokenName = 'remember_me_token';

    protected $table = "admin";

    protected $fillable = ['name','email','username','password'];

    protected $hidden = ['password','remember_token'];
}
