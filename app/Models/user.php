<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;
class user extends AuthUser
{
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
