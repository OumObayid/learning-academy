<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    
    protected $guarded = ['id'];
   //Creation de la relation 1-many: Cat-Course
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
