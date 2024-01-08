<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Ciudad') }}
            </h2>
        </div>
    </x-slot>
    <x-card-show>
        <x-slot:blocks>
            <div class="bg-white p-4 rounded col-span-12">
                <div class="flex justify-between items-center">
                    <span>Juana Diaz</span>
                    <span class="font-black">
                        <select name="" id="" class="border-gray-200 rounded text-sm">
                            <option value="">2023</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                        </select>
                    </span>
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
                <h2 class="mb-6">Dirrecciones</h2>
               
                <section class="space-y-2">
                    <ul class="hidden lg:grid grid-cols-8 text-xs font-black uppercase text-gray-500">
                        <li>Nombre</li>
                        <li>Venta</li>
                        <li>Productos</li>
                        <li>Instalaciones</li>
                        <li>Mantenimeinto</li>
                        <li>Diagnostico</li>
                        <li>Reparacion</li>
                        <li>Consultas</li>
                    </ul>
                    <section class="space-y-2">
                        <a href="#" class="block bg-gray-100 rounded">
                            <ul class="flex flex-row justify-between items-center text-sm bg-gray-100 p-2 rounded lg:hidden">
                                <li>Urb. Villas del Prado</li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
        
                                </li>
                            </ul>
                            <ul class="hidden lg:grid grid-cols-8 items-center text-sm bg-gray-100 p-2 rounded">
                                <li>
                                    <span>
                                        Urb. Villas del Prado
                                    </span>
                                    <span>
                                        
                                    </span>
                                </li>
                                <li class="flex flex-col">
                                    <span>2</span>
                                    <span class="text-xs text-gray-600">$1,050.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>2</span>
                                    <span class="text-xs text-gray-600">$350.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>12</span>
                                    <span class="text-xs text-gray-600">$650.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>12</span>
                                    <span class="text-xs text-gray-600">$1,050.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>2</span>
                                    <span class="text-xs text-gray-600">$650.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>2</span>
                                    <span class="text-xs text-gray-600">$350.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>56</span>
                                    <span class="text-xs text-gray-600">$5,050.00</span>
                                </li>
                            </ul>
                        </a>
                        <a href="#" class="block bg-gray-100 rounded">
                            <ul class="flex flex-row justify-between items-center text-sm bg-gray-100 p-2 rounded lg:hidden">
                                <li>Urb. Colinas del Prado</li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
        
                                </li>
                            </ul>
                            <ul class="hidden lg:grid grid-cols-8 items-center text-sm bg-gray-100 p-2 rounded">
                                <li>
                                    <span>
                                        Urb. Colinas del Prado
                                    </span>
                                    <span>
                                        
                                    </span>
                                </li>
                                <li class="flex flex-col">
                                    <span>2</span>
                                    <span class="text-xs text-gray-600">$1,050.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>2</span>
                                    <span class="text-xs text-gray-600">$350.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>12</span>
                                    <span class="text-xs text-gray-600">$650.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>12</span>
                                    <span class="text-xs text-gray-600">$1,050.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>2</span>
                                    <span class="text-xs text-gray-600">$650.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>2</span>
                                    <span class="text-xs text-gray-600">$350.00</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>56</span>
                                    <span class="text-xs text-gray-600">$5,050.00</span>
                                </li>
                            </ul>
                        </a>
                    </section>
                </section>
            </div>
        </x-slot:blocks>
    </x-card-show>

</x-admin.app-layout>