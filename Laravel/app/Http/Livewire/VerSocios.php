<?php

namespace App\Http\Livewire;

use App\Models\Socio;
use Livewire\Component;
use Livewire\WithPagination;

class VerSocios extends Component
{
    use WithPagination;

    protected $listeners = ['renderAñadirSocio' => 'render',
        'renderEditarSocio' => 'render',
        'borrar'];

    public $buscador;
    public $ordenar = 'dni';
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

    public function borrar($socio){
        Socio::destroy($socio);
    }

    public function render()
    {
        $socios = Socio::where('dni', 'like', '%'.$this->buscador.'%')
            ->orwhere('nombre', 'like', '%'.$this->buscador.'%')
            ->orwhere('apellidos', 'like', '%'.$this->buscador.'%')
            ->orwhere('nacimiento', 'like', '%'.$this->buscador.'%')
            ->orwhere('direccion', 'like', '%'.$this->buscador.'%')
            ->orwhere('poblacion', 'like', '%'.$this->buscador.'%')
            ->orwhere('telefono', 'like', '%'.$this->buscador.'%')
            ->orwhere('alergias', 'like', '%'.$this->buscador.'%')
            ->orwhere('seccion', 'like', '%'.$this->buscador.'%')
            ->orderBy($this->ordenar,$this->direccion)
            ->paginate($this->cantidad);

        return view('livewire.ver-socios', compact('socios'));
    }
}
