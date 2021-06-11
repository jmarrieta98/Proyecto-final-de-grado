<div>
    <x-jet-secondary-button wire:click="$set('abierto',true)">Editar</x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="abierto">
        <x-slot name="title">
            Editar socio {{$socio->nombre}}
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label>Dni</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="socio.dni"></x-jet-input>
                <x-jet-input-error for="socio.dni"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Nombre</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="socio.nombre"></x-jet-input>
                <x-jet-input-error for="socio.nombre"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Apellidos</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="socio.apellidos"></x-jet-input>
                <x-jet-input-error for="socio.apellidos"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Fecha de nacimiento</x-jet-label>
                <x-jet-input type="date" class="w-full" wire:model.defer="socio.nacimiento"></x-jet-input>
                <x-jet-input-error for="socio.nacimiento"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Direccion</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="socio.direccion"></x-jet-input>
                <x-jet-input-error for="socio.direccion"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Poblacion</x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model.defer="socio.poblacion"></x-jet-input>
                <x-jet-input-error for="socio.poblacion"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Telefono</x-jet-label>
                <x-jet-input type="tel" class="w-full" wire:model.defer="socio.telefono"></x-jet-input>
                <x-jet-input-error for="socio.telefono"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Alergias</x-jet-label>
                <textarea class="form-control w-full" wire:model.defer="socio.alergias"></textarea>
                <x-jet-input-error for="socio.alergias"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Seccion</x-jet-label>
                <select class="form-control w-full" wire:model="socio.seccion">
                    <option value="">Seleccione una sección</option>
                    @foreach(\App\Models\Seccion::all() as $seccion)
                        <option value="{{$seccion->id}}">{{$seccion->nombre}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="socio.seccion"/>
            </div>
            <div class="mb-4">
                <x-jet-label>Tutor</x-jet-label>
                <select class="form-control w-full" wire:model="socio.tutor">
                    <option value="">Seleccione un tutor</option>
                    @foreach(\App\Models\Tutor::all() as $tutor)
                        <option value="{{$tutor->id}}">{{$tutor->nombre}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="socio.tutor"/>
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
