<?php

namespace App\Http\Livewire;

use App\Models\Objeto;
use Livewire\Component;

class EditarObjeto extends Component
{

    public $abierto = false;
    public $material;

    protected $rules = [
        'material.nombre' => 'required',
        'material.descripcion' => 'required',
        'material.almacen_id' => 'required',
    ];

    public function guardar(){

        $this->validate();

        $this->material->save();

        $this->reset(['abierto']);

        $this->emitTo('ver-objetos','renderEditarMaterial');
        $this->emit('alerta', 'El material se editó correctamente');
    }

    public function mount(Objeto $material){
        $this->material = $material;
    }

    public function render()
    {
        return view('livewire.editar-objeto');
    }
}
