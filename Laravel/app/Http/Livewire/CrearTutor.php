<?php

namespace App\Http\Livewire;

use App\Models\Preinscripción;
use App\Models\Tutor;
use Illuminate\Support\Str;
use Livewire\Component;

class CrearTutor extends Component
{

    public $abierto = false;

    public $nombre, $apellidos, $dni, $telefono;

    protected $rules = [
        'nombre' => 'required',
        'apellidos' => 'required',
        'dni' => 'required',
        'telefono' => 'required',
    ];

    public function guardar()
    {

        $this->validate();

        Tutor::create([
            'nombre' => $this->nombre,
            'slug' => Str::slug($this->nombre),
            'apellidos' => $this->apellidos,
            'dni' => $this->dni ,
            'telefono' => $this->telefono
        ]);

        $this->reset(['abierto', 'nombre', 'apellidos', 'dni', 'telefono']);


        $this->emitTo('ver-preinscripciones', 'renderAñadirTutor');
        $this->emit('alerta', 'El tutor se creó correctamente');
    }

    public function render()
    {
        return view('livewire.crear-tutor');
    }
}
