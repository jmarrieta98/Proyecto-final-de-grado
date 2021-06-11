<div>
    <x-jet-button wire:click="$set('abierto',true)">Añadir nuevo socio</x-jet-button>
    <x-jet-dialog-modal wire:model="abierto">
        <x-slot name="title">
            Añadir nuevo socio
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label>Dni</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="dni"></x-jet-input>
                <x-jet-input-error for="dni"/>
            </div>
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
                <x-jet-input type="date" class="w-full" wire:model.defer="nacimiento"></x-jet-input>
                <x-jet-input-error for="nacimiento"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Direccion</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="direccion"></x-jet-input>
                <x-jet-input-error for="direccion"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Poblacion</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="poblacion"></x-jet-input>
                <x-jet-input-error for="poblacion"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Telefono</x-jet-label>
                <x-jet-input type="tel" class="w-full" wire:model.defer="telefono"></x-jet-input>
                <x-jet-input-error for="telefono"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Alergias</x-jet-label>
                <textarea class="form-control w-full" wire:model.defer="alergias"></textarea>
                <x-jet-input-error for="alergias"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Seccion</x-jet-label>
                <select class="form-control w-full" wire:model="seccion">
                    <option value="">Seleccione una sección</option>
                    @foreach(\App\Models\Seccion::all() as $seccion)
                        <option value="{{$seccion->id}}">{{$seccion->nombre}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="seccion"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Tutor</x-jet-label>
                <select class="form-control w-full" wire:model="tutor">
                    <option value="">Seleccione un tutor</option>
                    @foreach(\App\Models\Tutor::all() as $tutor)
                        <option value="{{$tutor->id}}">{{$tutor->nombre}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="tutor"/>
            </div>
        </x-slot>
        <x-slot name="footer">
            <span class="text-purple-600" wire:loading wire:target="guardar">Cargando ...</span>
            <x-jet-secondary-button wire:click="$set('abierto',false)">
                Salir
            </x-jet-secondary-button>
            <x-jet-button wire:click="guardar" wire:loading.attr="disabled" wire:target="guardar"
                          class="disabled:opacity-50">
                Añadir Socio
            </x-jet-button>


        </x-slot>
    </x-jet-dialog-modal>
</div>
