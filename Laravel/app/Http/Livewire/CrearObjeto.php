<?php

namespace App\Http\Livewire;

use App\Models\Objeto;
use Illuminate\Support\Str;
use Livewire\Component;

class CrearObjeto extends Component
{
    public $abierto = false;

    public $nombre, $descripcion, $almacen_id;

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'almacen_id' => 'required',
    ];

    public function guardar()
    {

        $this->validate();

        Objeto::create([
            'nombre' => $this->nombre,
            'slug' => Str::slug($this->nombre),
            'descripcion' => $this->descripcion,
            'almacen_id' => $this->almacen_id,
        ]);

        $this->reset(['abierto', 'nombre', 'descripcion', 'almacen_id']);


        $this->emitTo('ver-objetos', 'renderAñadirMaterial');
        $this->emit('alerta', 'El material se creó correctamente');
    }
    public function render()
    {
        return view('livewire.crear-objeto');
    }
}
