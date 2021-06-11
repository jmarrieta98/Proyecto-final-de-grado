<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePreinscripcion;
use App\Models\Preinscripción;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PreinscripciónController extends Controller
{
    public function store(StorePreinscripcion $request)
    {
        $preinscripcion = Preinscripción::create($request->all());
        $slug = Str::slug($preinscripcion->nombre);
        $preinscripcion->update(['slug' => $slug ]);
        return redirect()->route('index');
    }
}
