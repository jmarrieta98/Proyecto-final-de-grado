<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    use HasFactory;

    protected $guarded = ['status'];

    public function almacen()
    {
        return $this->belongsTo(Almacen::class, 'almacen_id',);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
