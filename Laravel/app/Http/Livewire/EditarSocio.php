<?php

namespace App\Http\Livewire;

use App\Models\Socio;
use Livewire\Component;

class EditarSocio extends Component
{
    public $abierto = false;
    public $socio;

    protected $rules = [
        'socio.nombre' => 'required',
        'socio.dni' => 'required',
        'socio.apellidos' => 'required',
        'socio.nacimiento' => 'required',
        'socio.direccion' => 'required',
        'socio.poblacion' => 'required',
        'socio.telefono' => 'required',
        'socio.alergias' => 'required',
        'socio.seccion' => 'required',
        'socio.tutor' => 'required',
    ];

    public function guardar(){

        $this->validate();

        $this->socio->save();

        $this->reset(['abierto']);

        $this->emitTo('ver-socios','renderEditarSocio');
        $this->emit('alerta', 'El socio se editó correctamente');
    }

    public function mount(Socio $socio){
        $this->socio = $socio;
    }

    public function render()
    {
        return view('livewire.editar-socio');
    }
}
