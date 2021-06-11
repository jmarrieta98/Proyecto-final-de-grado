<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preinscripción extends Model
{
    use HasFactory;

    protected $guarded = ['status'];

    protected $table = 'preinscripciones';

}
