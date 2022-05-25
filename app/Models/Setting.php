<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
        // Seuls ces champs compte pour une tel operation crud
    protected $fillable = ['name','title','subtitle','desc','logo','favicon','background','city','adresse','phone','work_hours','email','site','fb','twiter','insta',];

    use HasFactory;
}

