<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <div class="flex flex-row justify-between">
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Orden') }}
                    </h2>
                </div>
                <div>
                    <x-project.dropdown>
                        <x-slot:trigger>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                              </svg>
                              
                        </x-slot:trigger>
                        <x-slot:content>
                            <ul>
                                <li class="p-2 text-sm hover:bg-gray-100 cursor-pointer">
                                    
                                </li>
                            </ul>
                        </x-slot:content>
                    </x-project.dropdown>
                </div>
            </div>
            <div>
                <x-sidebar-form title="Crear orden de trabajo" >
                    {{-- <livewire:admin.create-role> --}}
                </x-sidebar-form>

            </div>
            
        </div>
        
    </x-slot>
    <x-card-show>
        <x-slot:blocks>
            <div class="bg-white p-4 rounded col-span-12">
                <div class="flex justify-between">
                    {{-- <span>Orden</span> --}}
                    <span class="font-black">4679812</span>
                </div>
            </div>
            <div class="bg-white p-4 rounded col-span-12 md:col-span-4">
                <h2>Fecha de la orden</h2>
                <ul class="mt-2 text-gray-500 text-sm">
                    <li>28/2/2022 21:03:53</li>
                </ul>
            </div>
            <a href="{{ route('admin.works.show', ['work'=>1]) }}"
                class="block bg-white hover:bg-gray-100 p-4 rounded col-span-12 md:col-span-4">
                <h2>Orden de trabajo</h2>
                <ul class="mt-2 text-gray-500 text-sm">
                    <li>621817982</li>
                </ul>
            </a>
            <div class="bg-white p-4 rounded col-span-12 md:col-span-4">
                <h2>Locacion</h2>
                <ul class="mt-2 text-gray-500 text-sm">
                    <li>Urbanizacion Villas del prado</li>
                    <li>Calle del Sol 125</li>
                    <li>Juana Diaz PR 00795</li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded col-span-12 lg:col-span-8 space-y-2">
                <div class="bg-gray-50 p-4 rounded">
                    <h2>Producto</h2>
                    <ul class="my-2 text-gray-500 text-sm">
                        <li class="line-clamp-1">
                            Aire acondicionado mini split 12,000 btu
                        </li>
                        <li class="flex justify-between ml-6">
                            <span>$459.00 x 1</span>
                            <span>$459.00</span>
                        </li>
                    </ul>
                    <h2>Servicio de instalacion</h2>
                    <ul class="my-2 text-gray-500 text-sm">
                        <li class="line-clamp-1">
                            Instalacion de aire acondicionado mini split 12,000 btu
                        </li>
                        <li class="flex justify-between ml-6">
                            <span>$150.00 x 1</span>
                            <span>$150.00</span>
                        </li>
                    </ul>
                    <h2>Fecha de instalacion</h2>
                    <ul class="my-2 text-gray-500 text-sm">
                        <li>28/2/2022</li>
                        <li class=" ml-6">En la manana</li>
                    </ul>

                </div>
                <div class="bg-gray-50 p-4 rounded">
                    <h2>Producto</h2>
                    <ul class="my-2 text-gray-500 text-sm">
                        <li class="line-clamp-1">
                            Aire acondicionado mini split 12,000 btu
                        </li>
                        <li class="flex justify-between ml-6">
                            <span>$459.00 x 1</span>
                            <span>$459.00</span>
                        </li>
                    </ul>
                    <h2>Servicio de instalacion</h2>
                    <ul class="my-2 text-gray-500 text-sm">
                        <li class="line-clamp-1">
                            Instalacion de aire acondicionado mini split 12,000 btu
                        </li>
                        <li class="flex justify-between ml-6">
                            <span>$150.00 x 1</span>
                            <span>$150.00</span>
                        </li>
                    </ul>
                    <h2>Fecha de instalacion</h2>
                    <ul class="my-2 text-gray-500 text-sm">
                        <li>28/2/2022</li>
                        <li class=" ml-6">En la manana</li>
                    </ul>

                </div>
            </div>
            <div class="bg-white p-4 rounded col-span-12 lg:col-span-4">
                <h2>Balance</h2>
                <ul class="my-2 text-gray-500 text-sm">
                    <li class="flex justify-between pb-4">
                        <span>Sub total:</span>
                        <span>$560.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Tax Municipal:</span>
                        <span>$5.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Tax Estatal</span>
                        <span>$34.00</span>
                    </li>
                    <li class="flex justify-between py-4">
                        <span>Total:</span>
                        <span>$560.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Pago:</span>
                        <span>$260.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Balance:</span>
                        <span>$300.00</span>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded col-span-12">
                <h2>Transacciones</h2>
                <ul class="my-2 text-gray-500 list-disc list-inside space-y-2">
                    <li
                        class="flex flex-col md:flex-row md:justify-between bg-gray-50 py-1 px-2 md:items-center rounded">
                        <span>
                            <ul>
                                <li class="font-black text-gray-800">21/02/2023 21:34:34</li>
                                <li class="text-sm">Transaccion completada</li>
                                <li class="text-xs italic">Pago del aire acondicionado mini split 12,000 btu</li>
                            </ul>
                        </span>
                        <span class="text-green-600">$260.00</span>
                    </li>
                    <li
                        class="flex flex-col md:flex-row md:justify-between bg-gray-50 py-1 px-2 md:items-center rounded">
                        <span>
                            <ul>
                                <li class="font-black text-gray-800">21/02/2023 21:34:34</li>
                                <li class="text-sm">Transaccion fallida</li>
                                <li class="text-xs italic">Pago del aire acondicionado mini split 12,000 btu</li>
                            </ul>
                        </span>
                        <span class="text-red-600">$260.00</span>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded col-span-12">
                <h2>Observaciones</h2>
                <p class="text-sm text-gray-600">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia neque distinctio qui, aut
                    dolor optio ut fuga eligendi, modi veniam rem dolorum quae ullam tempore reprehenderit, ab
                    repellat ducimus sequi!
                </p>
            </div>
        </x-slot:blocks>
    </x-card-show>

</x-admin.app-layout>