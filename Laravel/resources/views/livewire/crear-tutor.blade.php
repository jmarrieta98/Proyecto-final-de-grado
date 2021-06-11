<div>
    <x-jet-button wire:click="$set('abierto',true)">Añadir nuevo tutor</x-jet-button>

    <x-jet-dialog-modal wire:model="abierto">
        <x-slot name="title">
            Añadir nuevo tutor
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label>Nombre</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre"></x-jet-input>
                <x-jet-input-error for="nombre"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Apellidos</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="apellidos"></x-jet-input>
                <x-jet-input-error for="apellidos"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Dni</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="dni"></x-jet-input>
                <x-jet-input-error for="dni"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Teléfono</x-jet-label>
                <x-jet-input type="tel" class="w-full" wire:model.defer="telefono"></x-jet-input>
                <x-jet-input-error for="telefono"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <span class="text-purple-600" wire:loading wire:target="guardar">Cargando ...</span>
            <x-jet-secondary-button wire:click="$set('abierto',false)">
                Salir
            </x-jet-secondary-button>
            <x-jet-button wire:click="guardar" wire:loading.attr="disabled" wire:target="guardar" class="disabled:opacity-50">
                Añadir tutor
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
