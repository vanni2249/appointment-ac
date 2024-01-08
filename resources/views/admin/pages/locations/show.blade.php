<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dirreccion') }}
            </h2>
        </div>
    </x-slot>
    <x-card-show>
        <x-slot:blocks>
            <div class="bg-white p-4 rounded col-span-12">
                <div class="flex justify-between items-center">
                    <div class="flex flex-col">
                        <span>
                            Urb. Villas del Prado
                        </span>
                        <span class="text-xs text-gray-600">
                            Juana Diaz
                        </span>
                    </div>
                    <div class="font-black">
                        <select name="" id="" class="border-gray-200 rounded text-sm">
                            <option value="">2023</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="bg-white p-4 col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Productos</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">5</p>
                <p class="text-sm text-gray-600">$450.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Instalaciones</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">12</p>
                <p class="text-sm text-gray-600">$350.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Mantenimiento</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">45</p>
                <p class="text-sm text-gray-600">$1450.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Diagnostico</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">12</p>
                <p class="text-sm text-gray-600">$250.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Reparaciones</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">12</p>
                <p class="text-sm text-gray-600">$850.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Consultas</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">56</p>
                <p class="text-sm text-gray-600">$2,450.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-12">
                <h2 class="mb-6">Ordenes</h2>
               
                <section class="space-y-2">
                    {{-- <ul class="hidden lg:grid grid-cols-8 text-xs font-black uppercase text-gray-500">
                        <li>Nombre</li>
                        <li>Venta</li>
                        <li>Productos</li>
                        <li>Instalaciones</li>
                        <li>Mantenimeinto</li>
                        <li>Diagnostico</li>
                        <li>Reparacion</li>
                        <li>Consultas</li>
                    </ul> --}}
                    <section class="space-y-2">
                        <a href="{{ route('admin.orders.show', ['order'=>1]) }}" class="block bg-gray-100 rounded">
                            {{-- Mobile --}}
                            <ul class="md:hidden flex justify-between items-center text-sm p-2">
                                <li class="flex flex-col">
                                    <span class=" font-semibold">
                                        Mantenimiento
                                    </span>
                                    <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                        03/13/2023
                                    </span>
                                </li>
                                <li class="fle">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                </li>
                            </ul>
                            {{-- Destop --}}
                            <ul class="hidden md:grid grid-cols-5 items-center text-sm p-2">
                                <li>
                                    <span class="font-semibold">
                                        487634323
                                    </span>
                                    <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                        03/13/2023
                                    </span>
                                </li>
                                <li>
                                    <span class="font-semibold">
                                        Mantenimieno
                                    </span>
                                    <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                        4 unidades
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="font-semibold">
                                        Vie. 12/21/23
                                    </span>
                                    <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                        Tarde
                                    </span>
                                </li>
                                <li>
                                    <span class="font-semibold">
                                        Geovanni Colon

                                    </span>
                                    <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                        En proceso
                                    </span>
                                </li>
                                <li>
                                    <span class="font-semibold">
                                        $450.00
                                    </span>
                                    
                                </li>
                            </ul>
                        </a>
                        <a href="{{ route('admin.orders.show', ['order'=>1]) }}" class="block bg-gray-100 rounded">
                            {{-- Mobile --}}
                            <ul class="md:hidden flex justify-between items-center text-sm p-2">
                                <li class="flex flex-col">
                                    <span class=" font-semibold">
                                        Mantenimiento
                                    </span>
                                    <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                        03/13/2023
                                    </span>
                                </li>
                                <li class="fle">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                </li>
                            </ul>
                            {{-- Destop --}}
                            <ul class="hidden md:grid grid-cols-5 items-center text-sm p-2">
                                <li>
                                    <span class="font-semibold">
                                        487634323
                                    </span>
                                    <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                        03/13/2023
                                    </span>
                                </li>
                                <li>
                                    <span class="font-semibold">
                                        Mantenimieno
                                    </span>
                                    <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                        4 unidades
                                    </span>
                                </li>
                                
                                <li>
                                    <span class="font-semibold">
                                        Vie. 12/21/23
                                    </span>
                                    <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                        Tarde
                                    </span>
                                </li>
                                <li>
                                    <span class="font-semibold">
                                        Geovanni Colon

                                    </span>
                                    <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                        En proceso
                                    </span>
                                </li>
                                <li>
                                    <span class="font-semibold">
                                        $450.00
                                    </span>
                                    
                                </li>
                            </ul>
                        </a>
                    </section>
                </section>
            </div>
        </x-slot:blocks>
    </x-card-show>

</x-admin.app-layout>