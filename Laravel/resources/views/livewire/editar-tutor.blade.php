<div>
    <x-jet-secondary-button wire:click="$set('abierto',true)">Editar</x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="abierto">
        <x-slot name="title">
            Editar tutor {{$tutor->nombre}}
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label>Nombre</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="tutor.nombre"></x-jet-input>
                <x-jet-input-error for="tutor.nombre"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Apellidos</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="tutor.apellidos"></x-jet-input>
                <x-jet-input-error for="tutor.apellidos"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Dni</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="tutor.dni"></x-jet-input>
                <x-jet-input-error for="tutor.dni"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Teléfono</x-jet-label>
                <x-jet-input type="tel" class="w-full" wire:model.defer="tutor.telefono"></x-jet-input>
                <x-jet-input-error for="tutor.telefono"/>
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
