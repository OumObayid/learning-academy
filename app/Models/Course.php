<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
      //use HasFactory;
      protected $guarded = ['id'];

   //Creation de la relation 'appartient à': 'belongsTo' : Course appartient à Cat
   // c'est l'inverse de la relation 'un a plusieur' : 'hasMany'
      public function cat()
      {
        //   return $this->belongsTo('App\Models\Cat');
          return $this->belongsTo(Cat::class);
      }

 //Creation de la relation 'appartient à': 'belongsTo' : Course appartient à Trainer
   // c'est l'inverse de la relation 'un a plusieur' : 'hasMany'
      public function trainer()
      {
          return $this->belongsTo(Trainer::class);
      }

 //Creation de la relation 'plusieur à plusieur': 'belongsToMany' : Course appartient à Students
      public function student()
      {
          return $this->belongsToMany(Student::class);
      }
}
