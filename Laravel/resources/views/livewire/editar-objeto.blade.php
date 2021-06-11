<div>
    <x-jet-secondary-button wire:click="$set('abierto',true)">Editar</x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="abierto">
        <x-slot name="title">
            Editar material {{$material->nombre}}
        </x-slot>
        <x-slot name="content">
            <div class="mb-4 text-6">
                <x-jet-label>Nombre del material</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="material.nombre"></x-jet-input>
                <x-jet-input-error for="material.nombre"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Descripción</x-jet-label>
                <textarea class="form-control w-full" wire:model.defer="material.descripcion"></textarea>
                <x-jet-input-error for="material.descripcion"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Almacen</x-jet-label>
                <select class="form-control w-full" wire:model="material.almacen_id">
                    @foreach(\App\Models\Almacen::all() as $almacen)
                        <option value="{{$almacen->id}}">{{$almacen->nombre}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="material.almacen_id"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <span class="text-purple-600" wire:loading wire:target="guardar">Cargando ...</span>
            <x-jet-secondary-button wire:click="$set('abierto',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-button wire:click="guardar" wire:loading.attr="disabled" wire:target="guardar"
                          class="disabled:opacity-50">
                Actualizar
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
