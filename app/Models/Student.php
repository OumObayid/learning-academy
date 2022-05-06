<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','email','spec'];

      //use HasFactory;
      use HasFactory;

      public function courses()
      {
          return $this->belongsToMany('App\Models\Course');
      }
}
