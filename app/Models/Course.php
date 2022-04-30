<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
      //use HasFactory;
      protected $guarded = ['id'];
      public function cat()
      {
          return $this->belongsTo('App\Cat');
      }
      public function trainer()
      {
          return $this->belongsTo('App\Trainer');
      }
      public function student()
      {
          return $this->belongsToMany('App\Student');
      }
}
