<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','email','spec'];

      //use HasFactory;
      use HasFactory;

 //Creation de la relation 'plusieur à plusieur': 'belongsToMany' : Student appartient à plusieurs courses
      public function courses()
      {
          //on doit spécifier l'attribut supplémentaire ('statut') de la table intermédiaire ('course_student) avec la fonction withPivot()
          return $this->belongsToMany(Course::class)->withPivot('status');
      }
}
