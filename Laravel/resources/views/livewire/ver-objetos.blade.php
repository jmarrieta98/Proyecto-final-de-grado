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
                        <x-jet-input class="flex-1 mx-4" placeholder="Escriba el material que esté buscando"
                                     wire:model="buscador" type="text"/>
                        @livewire('crear-objeto')
                    </div>
                    @if($materiales->count())
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
                                    wire:click="ordenar('descripcion')">
                                    Descripción
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase"
                                    wire:click="ordenar('almacen_id')">
                                    Nº Almacén
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase">
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-purple-600">
                            @foreach($materiales as $material)
                                <tr>
                                    <td class="px-6 py-4 ">
                                        {{$material->id}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$material->nombre}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$material->descripcion}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$material->almacen_id}}- {{$material->almacen->nombre}}
                                    </td>
                                    <td class="px-6 py-4 flex float-right">
                                        @livewire('editar-objeto',['material' => $material ], key($material->id))
                                        <x-jet-danger-button wire:click="$emit('borrarMaterial',{{$material->id}})"
                                                             class="ml-2"><i class="far fa-trash-alt"></i>
                                        </x-jet-danger-button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="px-6 py-4">
                            No existe ningún material
                        </div>
                    @endif

                    @if($materiales->hasPages())
                        <div class="px-6 py-4">
                            {{$materiales->links()}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="sweetalert2.all.min.js"></script>
        <script>
            Livewire.on('borrarMaterial', idMaterial => {
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
                        Livewire.emitTo('ver-objetos', 'borrar', idMaterial);
                        Swal.fire(
                            '¡Borrado!',
                            'El material ha sido eliminado.',
                            'success'
                        )

                    }
                })
            })
        </script>
    @endpush
</div>
