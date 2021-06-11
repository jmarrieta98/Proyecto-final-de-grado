<?php

namespace App\Http\Livewire;

use App\Models\Preinscripción;
use Livewire\Component;
use Livewire\WithPagination;

class VerPreinscripciones extends Component
{
    use WithPagination;

    protected $listeners = ['renderAñadirPreinscripcion' => 'render',
        'renderEditarPreinscripcion' => 'render',
        'borrar'];

    public $buscador;
    public $ordenar = 'id';
    public  $direccion = "asc";
    public $cantidad = 10;

    public function updatingBuscador(){
        $this->resetPage();
    }

    public function render()
    {
        $preinscripciones = Preinscripción::where('nombre', 'like', '%'.$this->buscador.'%')
            ->orwhere('apellidos', 'like', '%'.$this->buscador.'%')
            ->orwhere('fecha_nacimiento', 'like', '%'.$this->buscador.'%')
            ->orwhere('nombre_tutor', 'like', '%'.$this->buscador.'%')
            ->orwhere('telefono', 'like', '%'.$this->buscador.'%')
            ->orwhere('informacion', 'like', '%'.$this->buscador.'%')
            ->orderBy($this->ordenar,$this->direccion)
            ->paginate($this->cantidad);

        return view('livewire.ver-preinscripciones', compact('preinscripciones'));
    }

    public function ordenar($orden)
    {
        if ($this->ordenar == $orden){
            if ($this->direccion == 'desc'){
                $this->direccion = 'asc';
            }else{
                $this->direccion = 'desc';
            }
        }
        else{
            $this->ordenar = $orden;
        }
    }

    public function borrar(Preinscripción $preinscripcion){
        $preinscripcion->delete();
    }
}
