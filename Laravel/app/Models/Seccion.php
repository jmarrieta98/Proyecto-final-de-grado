<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;

    protected $guarded = ['status'];

    protected $table = 'secciones';

    public function socios(){
        return $this->hasMany('App\Models\Socio','seccion');
    }

}
