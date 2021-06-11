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
                        <x-jet-input class="flex-1 mx-4" placeholder="Escriba el campamento que esté buscando"
                                     wire:model="buscador" type="text"/>
                        @livewire('crear-campamento')
                    </div>
                    @if($campamentos->count())
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
                                    wire:click="ordenar('lugar')">
                                    Lugar
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase"
                                    wire:click="ordenar('fecha')">
                                    Fecha
                                </th>
                                <th scope="col"
                                    class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-purple-600 uppercase">
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-purple-600">
                            @foreach($campamentos as $campamento)
                                <tr>
                                    <td class="px-6 py-4 ">
                                        {{$campamento->id}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$campamento->nombre}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$campamento->lugar}}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        {{$campamento->fecha}}
                                    </td>
                                    <td class="px-6 py-4 flex float-right">
                                        @livewire('editar-campamento',['campamento' => $campamento ], key($campamento->id))
                                        <x-jet-danger-button wire:click="$emit('borrarCampamento',{{$campamento->id}})"
                                                             class="ml-2"><i class="far fa-trash-alt"></i>
                                        </x-jet-danger-button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="px-6 py-4">
                            No existe ningún campamento
                        </div>
                    @endif

                    @if($campamentos->hasPages())
                        <div class="px-6 py-4">
                            {{$campamentos->links()}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="sweetalert2.all.min.js"></script>
        <script>
            Livewire.on('borrarCampamento', idCampamento => {
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
                        Livewire.emitTo('ver-campamentos', 'borrar', idCampamento);
                        Swal.fire(
                            '¡Borrado!',
                            'El campamento ha sido eliminado.',
                            'success'
                        )

                    }
                })
            })
        </script>
    @endpush
</div>
