<?php

namespace App\Http\Livewire;

use App\Models\Campamento;
use Illuminate\Support\Str;
use Livewire\Component;

class EditarCampamento extends Component
{
    public $abierto = false;
    public $campamento;

    protected $rules = [
        'campamento.nombre' => 'required',
        'campamento.fecha' => 'required',
        'campamento.lugar' => 'required'
    ];

    public function guardar(){

        $this->validate();

        $this->campamento->save();

        $this->reset(['abierto']);

        $this->emitTo('ver-campamentos','renderEditarCampamento');
        $this->emit('alerta', 'El campamento se editó correctamente');
    }

    public function mount(Campamento $campamento){
        $this->campamento = $campamento;
    }

    public function render()
    {
        return view('livewire.editar-campamento');
    }
}
