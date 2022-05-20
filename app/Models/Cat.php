<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    
    protected $guarded = ['id'];

    public function courses()
    {
        //Creation de la relation 1-many: Cat-Coyrse
        return $this->hasMany('App\Course');
    }
}
