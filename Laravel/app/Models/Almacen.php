<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    use HasFactory;

    protected $guarded = ['status'];

    protected $table = 'almacenes';

    public function objetos(): HasMany
    {
        return $this->hasMany('App\Models\Objeto', 'almacen_id');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
