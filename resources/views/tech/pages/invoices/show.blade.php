<x-tech.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Factura') }}
            </h2>
        </div>
    </x-slot>
    <x-card-show>
        <x-slot:blocks>
            <div class="bg-white p-4 rounded col-span-12">
                <div class="flex justify-between items-center">
                    <span>181987428</span>
                    
                </div>
            </div>

            <div class="bg-white p-4 col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Semana</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">23</p>
                <p class="text-sm text-gray-600">30 abril - 6 mayo</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Instalaciones</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">12</p>
                <p class="text-sm text-gray-600">$350.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Mantenimiento</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">45</p>
                <p class="text-sm text-gray-600">$70.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Diagnostico</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">12</p>
                <p class="text-sm text-gray-600">$25.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Reparaciones</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">12</p>
                <p class="text-sm text-gray-600">$50.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-6 md:col-span-4 lg:col-span-2">
                <h2 class="font-black">Balance</h2>
                <p class="text-2xl font-semibold text-gray-900 mt-4">$550.00</p>
            </div>
            <div class="bg-white p-4  col-span-12 sm:col-span-12">
                <h2 class="mb-6">Trabajos</h2>
               
                <section class="space-y-2">
                    <ul class="hidden lg:grid grid-cols-5 text-xs font-black uppercase text-gray-500">
                        <li>#</li>
                        <li>Tipo</li>
                        <li>Dia</li>
                        <li>Completado</li>
                        <li>Balance</li>
                    </ul>
                    <section class="space-y-2">
                        <a href="#" class="block bg-gray-100 hover:bg-gray-200 p-2 rounded">
                            <ul class="flex flex-row justify-between items-center text-sm lg:hidden">
                                <li class="flex flex-col">
                                    <span>
                                        Mantenimiento
                                    </span>
                                    <span class="text-xs text-gray-600">
                                        $50.00
                                    </span>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
        
                                </li>
                            </ul>
                            <ul class="hidden lg:grid grid-cols-5 items-center text-sm">
                                <li>
                                    <span>
                                        1687497
                                    </span>
                                </li>
                                <li class="flex flex-col">
                                    <span>Mantenimiento</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>24 mayo 2023</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>24 mayo 2023</span>
                                </li>
                                <li class="flex flex-col">
                                    <span>$50.00</span>
                                </li>
                               
                            </ul>
                        </a>
                       
                    </section>
                </section>
            </div>
        </x-slot:blocks>
    </x-card-show>

</x-tech.app-layout>