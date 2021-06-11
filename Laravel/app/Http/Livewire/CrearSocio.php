<?php

namespace App\Http\Livewire;

use App\Models\Socio;
use Illuminate\Support\Str;
use Livewire\Component;

class CrearSocio extends Component
{
    public $abierto = false;

    public $dni, $nombre, $apellidos, $nacimiento, $direccion, $poblacion, $telefono, $alergias, $seccion, $tutor ;

    protected $rules = [
        'nombre' => 'required',
        'dni' => 'required',
        'apellidos' => 'required',
        'nacimiento' => 'required',
        'direccion' => 'required',
        'poblacion' => 'required',
        'telefono' => 'required',
        'alergias' => 'required',
        'seccion' => 'required',
        'tutor' => 'required',
    ];

    public function guardar()
    {

        $this->validate();

        Socio::create([
            'dni' => $this->dni,
            'nombre' => $this->nombre,
            'slug' => Str::slug($this->nombre),
            'apellidos' => $this->apellidos,
            'nacimiento' => $this->nacimiento,
            'direccion' => $this->direccion,
            'poblacion' => $this->poblacion,
            'telefono' => $this->telefono,
            'alergias' => $this->alergias,
            'seccion' => $this->seccion,
            'tutor' => $this->tutor,
        ]);

        $this->reset(['abierto', 'nombre', 'dni', 'apellidos', 'nacimiento', 'direccion', 'poblacion', 'telefono', 'alergias', 'seccion', 'tutor']);


        $this->emitTo('ver-socios', 'renderAñadirSocio');
        $this->emit('alerta', 'El socio se creó correctamente');
    }
    public function render()
    {
        return view('livewire.crear-socio');
    }
}
