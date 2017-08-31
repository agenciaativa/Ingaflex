<?php

namespace Ingaflex\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
