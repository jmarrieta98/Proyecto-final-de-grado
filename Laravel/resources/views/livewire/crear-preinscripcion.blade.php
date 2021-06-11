<div>
    <x-jet-button wire:click="$set('abierto',true)">Añadir nuevo campamento</x-jet-button>

    <x-jet-dialog-modal wire:model="abierto">
        <x-slot name="title">
            Añadir nueva preinscripción
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
                <x-jet-label>Fecha de nacimiento</x-jet-label>
                <x-jet-input type="date" class="w-full" wire:model.defer="fecha_nacimiento"></x-jet-input>
                <x-jet-input-error for="fecha_nacimiento"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Nombre del tutor</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre_tutor"></x-jet-input>
                <x-jet-input-error for="nombre_tutor"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Teléfono</x-jet-label>
                <x-jet-input type="tel" class="w-full" wire:model.defer="telefono"></x-jet-input>
                <x-jet-input-error for="telefono"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Información adicional</x-jet-label>
                <textarea class="form-control w-full" wire:model.defer="informacion"></textarea>
                <x-jet-input-error for="informacion"/>
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
