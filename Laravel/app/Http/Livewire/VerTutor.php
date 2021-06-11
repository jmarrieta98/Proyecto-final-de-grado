<?php

namespace App\Http\Livewire;

use App\Models\Tutor;
use Livewire\Component;
use Livewire\WithPagination;

class VerTutor extends Component
{
    use WithPagination;

    protected $listeners = ['renderAñadirTutor' => 'render',
        'renderEditarTutor' => 'render',
        'borrar'];

    public $buscador;
    public $ordenar = 'id';
    public  $direccion = "asc";
    public $cantidad = 10;

    public function updatingBuscador(){
        $this->resetPage();
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

    public function borrar(Tutor $tutor){
        $tutor->delete();
    }

    public function render()
    {
        $tutores = Tutor::where('nombre', 'like', '%'.$this->buscador.'%')
            ->orwhere('apellidos', 'like', '%'.$this->buscador.'%')
            ->orwhere('dni', 'like', '%'.$this->buscador.'%')
            ->orwhere('telefono', 'like', '%'.$this->buscador.'%')
            ->orderBy($this->ordenar,$this->direccion)
            ->paginate($this->cantidad);

        return view('livewire.ver-tutor', compact('tutores'));
    }
}
