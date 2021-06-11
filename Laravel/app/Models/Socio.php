<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Socio extends Model
{
    use HasFactory;

    protected $guarded = ['status'];

    public function NombreSeccion(): BelongsTo
    {
        return $this->belongsTo('App\Models\Seccion','seccion');
    }

    public function NombreTutor(): BelongsTo
    {
        return $this->belongsTo('App\Models\Tutor','tutor');
    }

}
