<?php

namespace App\Http\Livewire;

use App\Models\Preinscripción;
use Illuminate\Support\Str;
use Livewire\Component;

class CrearPreinscripcion extends Component
{
    public $abierto = false;

    public $nombre, $apellidos, $fecha_nacimiento, $nombre_tutor, $telefono, $informacion;

    protected $rules = [
        'nombre' => 'required',
        'apellidos' => 'required',
        'fecha_nacimiento' => 'required',
        'nombre_tutor' => 'required',
        'telefono' => 'required',
    ];

    public function guardar()
    {

        $this->validate();

        Preinscripción::create([
            'nombre' => $this->nombre,
            'slug' => Str::slug($this->nombre),
            'apellidos' => $this->apellidos,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'nombre_tutor' => $this->nombre_tutor ,
            'telefono' => $this->telefono ,
            'informacion' => $this->informacion
        ]);

        $this->reset(['abierto', 'nombre', 'apellidos', 'fecha_nacimiento', 'nombre_tutor', 'telefono', 'informacion']);


        $this->emitTo('ver-preinscripciones', 'renderAñadirPreinscripcion');
        $this->emit('alerta', 'La preinscripción se creó correctamente');
    }

    public function render()
    {
        return view('livewire.crear-preinscripcion');
    }
}
