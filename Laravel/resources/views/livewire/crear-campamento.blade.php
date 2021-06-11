<div>
    <x-jet-button wire:click="$set('abierto',true)">Añadir nuevo campamento</x-jet-button>

    <x-jet-dialog-modal wire:model="abierto">
        <x-slot name="title">
            Añadir nuevo campamento
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label>Nombre</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre"></x-jet-input>
                <x-jet-input-error for="nombre"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Lugar</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="lugar"></x-jet-input>
                <x-jet-input-error for="lugar"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Fecha</x-jet-label>
                <x-jet-input type="date" class="w-full" wire:model.defer="fecha"></x-jet-input>
                <x-jet-input-error for="fecha"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <span class="text-purple-600" wire:loading wire:target="guardar">Cargando ...</span>
            <x-jet-secondary-button wire:click="$set('abierto',false)">
                Salir
            </x-jet-secondary-button>
            <x-jet-button wire:click="guardar" wire:loading.attr="disabled" wire:target="guardar" class="disabled:opacity-50">
                Añadir campamento
            </x-jet-button>


        </x-slot>
    </x-jet-dialog-modal>
</div>
