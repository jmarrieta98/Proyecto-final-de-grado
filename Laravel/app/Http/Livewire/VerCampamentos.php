<?php

namespace App\Http\Livewire;

use App\Models\Campamento;
use Livewire\Component;
use Livewire\WithPagination;

class VerCampamentos extends Component
{
    use WithPagination;

    protected $listeners = ['renderAñadirCampamento' => 'render',
        'renderEditarCampamento' => 'render',
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
        $campamentos = Campamento::where('nombre', 'like', '%'.$this->buscador.'%')
            ->orwhere('lugar', 'like', '%'.$this->buscador.'%')
            ->orwhere('fecha', 'like', '%'.$this->buscador.'%')
            ->orderBy($this->ordenar,$this->direccion)
            ->paginate($this->cantidad);

        return view('livewire.ver-campamentos', compact('campamentos'));
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

    public function borrar(Campamento $campamento){
        $campamento->delete();
    }
}
