<div>
    <x-jet-secondary-button wire:click="$set('abierto',true)">Editar</x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="abierto">
        <x-slot name="title">
            Editar campamento {{$campamento->nombre}}
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label>Nombre del campamento</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="campamento.nombre"></x-jet-input>
                <x-jet-input-error for="campamento.nombre"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Lugar del campamento</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="campamento.lugar"></x-jet-input>
                <x-jet-input-error for="campamento.lugar"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Fecha de iniciación del campamento</x-jet-label>
                <x-jet-input type="date" class="w-full" wire:model.defer="campamento.fecha"></x-jet-input>
                <x-jet-input-error for="campamento.fecha"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <span class="text-purple-600" wire:loading wire:target="guardar">Cargando ...</span>
            <x-jet-secondary-button wire:click="$set('abierto',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-button wire:click="guardar" wire:loading.attr="disabled" wire:target="guardar" class="disabled:opacity-50">
                Actualizar
            </x-jet-button>


        </x-slot>
    </x-jet-dialog-modal>
</div>
