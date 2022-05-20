<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use  Notifiable;
    // protected $guard = 'admin';
    // Seuls ces champs compte pour une tel operation crud
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password'
    ];
}
