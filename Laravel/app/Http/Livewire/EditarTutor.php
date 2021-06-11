<?php

namespace App\Http\Livewire;

use App\Models\Tutor;
use Livewire\Component;

class EditarTutor extends Component
{

    public $abierto = false;
    public $tutor;

    protected $rules = [
        'tutor.nombre' => 'required',
        'tutor.apellidos' => 'required',
        'tutor.dni' => 'required',
        'tutor.telefono' => 'required'
    ];

    public function guardar(){

        $this->validate();

        $this->tutor->save();

        $this->reset(['abierto']);

        $this->emitTo('ver-tutor','renderEditarTutor');
        $this->emit('alerta', 'El tutor se editó correctamente');
    }

    public function mount(Tutor $tutor){
        $this->tutor = $tutor;
    }
    public function render()
    {
        return view('livewire.editar-tutor');
    }
}
