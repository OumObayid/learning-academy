<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsLetter extends Model
{ 
        // Seuls ces champs compte pour une tel operation crud
    protected $fillable = ['email'];

    use HasFactory;
}
