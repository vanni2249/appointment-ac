<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Transacciones') }}
            </h2>
        </div>
    </x-slot>
    <x-card-index>
        <x-slot:title>
            1 al 25 de 250
        </x-slot:title>
        <x-slot:menu>
            
        </x-slot:menu>
        <x-slot:items>
            <div>
                <a href="{{ route('admin.transactions.show', ['transaction'=>1]) }}">
                    <div class="bg-white hover:bg-gray-100 p-4 rounded">
                        {{-- Mobile --}}
                        <ul class="lg:hidden flex justify-between items-center text-sm">
                            <li class="flex flex-col">
                                <div class=" font-semibold">
                                    Mantenimiento
                                </div>
                                <div class="flex flex-row flex-wrap gap-2 text-xs font-bold text-gray-600  line-clamp-1">
                                    <span class="">
                                        156484191
                                    </span>
                                    <span class="bg-gray-200 px-2 rounded-full">
                                        03/13/2023
                                    </span>
                                    <span class="bg-green-200 px-2 rounded-full">
                                        En linea
                                    </span>
                                </div>
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
                        <ul class="hidden lg:grid grid-cols-5 text-sm">
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
                                    Juana Diaz
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    Urb. Villas del Prado
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
                        </ul>

                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('admin.transactions.show', ['transaction'=>1]) }}">
                    <div class="bg-white hover:bg-gray-100 p-4 rounded">
                        {{-- Mobile --}}
                        <ul class="lg:hidden flex justify-between items-center text-sm">
                            <li class="flex flex-col">
                                <div class=" font-semibold">
                                    Mantenimiento
                                </div>
                                <div class="flex flex-row flex-wrap gap-2 text-xs font-bold text-gray-600  line-clamp-1">
                                    <span class="">
                                        156484191
                                    </span>
                                    <span class="bg-gray-200 px-2 rounded-full">
                                        03/13/2023
                                    </span>
                                    <span class="bg-green-200 px-2 rounded-full">
                                        En linea
                                    </span>
                                </div>
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
                        <ul class="hidden lg:grid grid-cols-5 text-sm">
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
                                    Juana Diaz
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    Urb. Villas del Prado
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
                        </ul>

                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('admin.transactions.show', ['transaction'=>1]) }}">
                    <div class="bg-white hover:bg-gray-100 p-4 rounded">
                        {{-- Mobile --}}
                        <ul class="lg:hidden flex justify-between items-center text-sm">
                            <li class="flex flex-col">
                                <div class=" font-semibold">
                                    Mantenimiento
                                </div>
                                <div class="flex flex-row flex-wrap gap-2 text-xs font-bold text-gray-600  line-clamp-1">
                                    <span class="">
                                        156484191
                                    </span>
                                    <span class="bg-gray-200 px-2 rounded-full">
                                        03/13/2023
                                    </span>
                                    <span class="bg-green-200 px-2 rounded-full">
                                        En linea
                                    </span>
                                </div>
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
                        <ul class="hidden lg:grid grid-cols-5 text-sm">
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
                                    Juana Diaz
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    Urb. Villas del Prado
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
                        </ul>

                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('admin.transactions.show', ['transaction'=>1]) }}">
                    <div class="bg-white hover:bg-gray-100 p-4 rounded">
                        {{-- Mobile --}}
                        <ul class="lg:hidden flex justify-between items-center text-sm">
                            <li class="flex flex-col">
                                <div class=" font-semibold">
                                    Mantenimiento
                                </div>
                                <div class="flex flex-row flex-wrap gap-2 text-xs font-bold text-gray-600  line-clamp-1">
                                    <span class="">
                                        156484191
                                    </span>
                                    <span class="bg-gray-200 px-2 rounded-full">
                                        03/13/2023
                                    </span>
                                    <span class="bg-green-200 px-2 rounded-full">
                                        En linea
                                    </span>
                                </div>
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
                        <ul class="hidden lg:grid grid-cols-5 text-sm">
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
                                    Juana Diaz
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    Urb. Villas del Prado
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
                        </ul>

                    </div>
                </a>
            </div>
        </x-slot:items>
    </x-card-index>
</x-admin.app-layout>