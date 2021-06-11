<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $guarded = ['status'];

    protected $table = 'tutores';

    public function socios(){
        return $this->hasMany('App\Models\Socio','tutor');
    }

}
