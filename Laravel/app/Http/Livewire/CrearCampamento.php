<?php

namespace App\Http\Livewire;

use App\Models\Campamento;
use Illuminate\Support\Str;
use Livewire\Component;

class CrearCampamento extends Component
{

    public $abierto = false;

    public $nombre, $lugar, $fecha;

    protected $rules = [
        'nombre' => 'required',
        'fecha' => 'required',
        'lugar' => 'required'
    ];

    public function guardar(){

        $this->validate();

        Campamento::create([
            'nombre' => $this->nombre,
            'slug' => Str::slug($this->nombre),
            'fecha' => $this->fecha,
            'lugar' => $this->lugar
        ]);

        $this->reset(['abierto', 'nombre','fecha','lugar']);


        $this->emitTo('ver-campamentos','renderAñadirCampamento');
        $this->emit('alerta', 'El campamento se creó correctamente');
    }

    public function render()
    {
        return view('livewire.crear-campamento');
    }
}
