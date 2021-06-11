<?php

namespace App\Http\Livewire;

use App\Models\Preinscripción;
use Livewire\Component;

class EditarPreinscripcion extends Component
{

    public $abierto = false;
    public $preinscripcion;

    protected $rules = [
        'preinscripcion.nombre' => 'required',
        'preinscripcion.apellidos' => 'required',
        'preinscripcion.fecha_nacimiento' => 'required',
        'preinscripcion.nombre_tutor' => 'required',
        'preinscripcion.telefono' => 'required',
        'preinscripcion.informacion' => 'nullable'
    ];

    public function guardar(){

        $this->validate();

        $this->preinscripcion->save();

        $this->reset(['abierto']);

        $this->emitTo('ver-preinscripciones','renderEditarPreinscripcion');
        $this->emit('alerta', 'La preinscripción se editó correctamente');
    }

    public function mount(Preinscripción $preinscripcion){
        $this->preinscripcion = $preinscripcion;
    }

    public function render()
    {
        return view('livewire.editar-preinscripcion');
    }
}
