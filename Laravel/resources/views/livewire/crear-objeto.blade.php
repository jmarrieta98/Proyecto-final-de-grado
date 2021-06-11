<div>
    <x-jet-button wire:click="$set('abierto',true)">Añadir nuevo material</x-jet-button>
    <x-jet-dialog-modal wire:model="abierto">
        <x-slot name="title">
            Añadir nuevo material
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label>Nombre</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre"></x-jet-input>
                <x-jet-input-error for="nombre"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Descripción</x-jet-label>
                <textarea class="form-control w-full" wire:model.defer="descripcion"></textarea>
                <x-jet-input-error for="descripcion"/>
            </div>

            <div class="mb-4">
                <x-jet-label>Almacen</x-jet-label>
                <select class="form-control w-full" wire:model="almacen_id">
                    @foreach(\App\Models\Almacen::all() as $almacen)
                        <option value="{{$almacen->id}}">{{$almacen->nombre}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="almacen_id"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <span class="text-purple-600" wire:loading wire:target="guardar">Cargando ...</span>
            <x-jet-secondary-button wire:click="$set('abierto',false)">
                Salir
            </x-jet-secondary-button>
            <x-jet-button wire:click="guardar" wire:loading.attr="disabled" wire:target="guardar"
                          class="disabled:opacity-50">
                Añadir Material
            </x-jet-button>


        </x-slot>
    </x-jet-dialog-modal>
</div>
