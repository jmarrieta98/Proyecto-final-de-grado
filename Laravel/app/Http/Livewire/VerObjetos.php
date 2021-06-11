<?php

namespace App\Http\Livewire;

use App\Models\Objeto;
use Livewire\Component;
use Livewire\WithPagination;

class VerObjetos extends Component
{
    use WithPagination;

    protected $listeners = ['renderAñadirMaterial' => 'render',
        'renderEditarMaterial' => 'render',
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

    public function borrar($objeto){
        Objeto::destroy($objeto);
    }

    public function render()
    {
        $materiales = Objeto::where('nombre', 'like', '%'.$this->buscador.'%')
            ->orwhere('descripcion', 'like', '%'.$this->buscador.'%')
            ->orwhere('almacen_id', 'like', '%'.$this->buscador.'%')
            ->orderBy($this->ordenar,$this->direccion)
            ->paginate($this->cantidad);

        return view('livewire.ver-objetos', compact('materiales'));
    }
}
