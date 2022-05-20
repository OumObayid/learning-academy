<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
      //use HasFactory;
      protected $guarded = ['id'];

         //Creation de la relation 1 à plusieurs: Trainer a plusieurs Courses
      public function courses()
      {
          return $this->hasMany(Course::class);
      }
}
