<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
      //use HasFactory;
      protected $guarded = ['id'];

   //Creation de la relation many-1: Course-Cat
      public function cat()
      {
          return $this->belongsTo('App\Models\Cat');
      }

//Creation de la relation many-1: Course-Trainer
      public function trainer()
      {
          return $this->belongsTo('App\Models\Trainer');
      }
      public function student()
      {
          return $this->belongsToMany('App\Models\Student');
      }
}
