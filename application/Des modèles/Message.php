<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
// Seuls ces champs compte pour une tel operation crud
    protected $fillable = ['name','email','subject','message'];
    use HasFactory;
}
