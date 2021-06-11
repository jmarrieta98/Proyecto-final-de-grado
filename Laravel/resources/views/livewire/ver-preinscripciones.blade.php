<div class="mt-10">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="px-6 py-4 flex items-center">
                        <div class="flex items-center">
                            <span>Mostrar</span>
                            <select wire:model="cantidad" class="mx-2 form-control">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <span>Entradas</span>
                        </div>
                        <x-jet-input class="flex-1 mx-4" placeholder="Escriba la preinscripcion que está buscando"
                                     wire:model="buscador" type="text"/>
                        @livewire('crear-preinscripcion')
                    </div>
                    @if($preinscripciones->count())
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-green-100">
                            <tr>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase"
                                    wire:click="ordenar('id')">
                                    Id
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase"
                                    wire:click="ordenar('nombre')">
                                    Nombre
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase"
                                    wire:click="ordenar('apellidos')">
                                    Apellidos
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase"
                                    wire:click="ordenar('fecha_nacimiento')">
                                    Fecha de nacimiento
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase"
                                    wire:click="ordenar('nombre_tutor')">
                                    Nombre del tutor
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase"
                                    wire:click="ordenar('telefono')">
                                    Teléfono
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase"
                                    wire:click="ordenar('informacion')">
                                    Información
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase">
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-purple-600">
                            @foreach($preinscripciones as $preinscripcion)
                                <tr>
                                    <td class="px-6 py-4 ">
                                        {{$preinscripcion->id}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$preinscripcion->nombre}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$preinscripcion->apellidos}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$preinscripcion->fecha_nacimiento}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$preinscripcion->nombre_tutor}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$preinscripcion->telefono}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$preinscripcion->informacion}}
                                    </td>
                                    <td class="px-6 py-4 flex float-right">
                                        @livewire('editar-preinscripcion',['preinscripcion' => $preinscripcion ], key($preinscripcion->id))
                                        <x-jet-danger-button wire:click="$emit('borrarPreinscripcion',{{$preinscripcion->id}})"
                                                             class="ml-2"><i class="far fa-trash-alt"></i>
                                        </x-jet-danger-button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="px-6 py-4">
                            No existe ninguna preinscripción
                        </div>
                    @endif

                    @if($preinscripciones->hasPages())
                        <div class="px-6 py-4">
                            {{$preinscripciones->links()}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="sweetalert2.all.min.js"></script>
        <script>
            Livewire.on('borrarPreinscripcion', idPreinscripcion => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "¡No podras revertir este cambio!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, borralo'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('ver-preinscripciones', 'borrar', idPreinscripcion);
                        Swal.fire(
                            '¡Borrado!',
                            'La preinscripcion ha sido borrada.',
                            'success'
                        )

                    }
                })
            })
        </script>
    @endpush
</div>
