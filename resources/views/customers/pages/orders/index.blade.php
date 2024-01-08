<x-customers.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                {{ __('Ordenes') }}
            </h2>
            <h3 class="text-2xl text-gray-600 line-clamp-1">Bienvenido: Geovanni Colon</h3>
        </div>
    </x-slot>
    <section class="container mx-auto pb-8">
        <div class="pb-8">
            <select name="" id="" class="border-gray-300 rounded focus:border-gray-400 focus:ring-0">
                <option value="">2023</option>
                <option value="">2022</option>
            </select>
        </div>
        <section class="container mx-auto pb-8">
            <x-card-index>
                <x-slot:title>
                    Ultimas 10 ordenes
                </x-slot:title>
                <x-slot:menu>
                    {{-- <input type="text" name="" id="" class="rounded-full"> --}}
                </x-slot:menu>
                <x-slot:items>
                    <div>
                        <a href="{{ route('customers.orders.show', ['order'=>1]) }}">
                            <div class="bg-white hover:bg-gray-100 p-4 rounded">
                                {{-- Mobile --}}
                                <ul class="md:hidden flex justify-between items-center text-sm">
                                    <li class="flex flex-col">
                                        <span class=" font-semibold">
                                            487634323
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
                                <ul class="hidden md:grid grid-cols-5 text-sm">
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
                        <a href="{{ route('customers.orders.show', ['order'=>1]) }}">
                            <div class="bg-white hover:bg-gray-100 p-4 rounded">
                                {{-- Mobile --}}
                                <ul class="md:hidden flex justify-between items-center text-sm">
                                    <li class="flex flex-col">
                                        <span class=" font-semibold">
                                            487634323
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
                                <ul class="hidden md:grid grid-cols-5 text-sm">
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
                        <a href="{{ route('customers.orders.show', ['order'=>1]) }}">
                            <div class="bg-white hover:bg-gray-100 p-4 rounded">
                                {{-- Mobile --}}
                                <ul class="md:hidden flex justify-between items-center text-sm">
                                    <li class="flex flex-col">
                                        <span class=" font-semibold">
                                            487634323
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
                                <ul class="hidden md:grid grid-cols-5 text-sm">
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
                        <a href="{{ route('customers.orders.show', ['order'=>1]) }}">
                            <div class="bg-white hover:bg-gray-100 p-4 rounded">
                                {{-- Mobile --}}
                                <ul class="md:hidden flex justify-between items-center text-sm">
                                    <li class="flex flex-col">
                                        <span class=" font-semibold">
                                            487634323
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
                                <ul class="hidden md:grid grid-cols-5 text-sm">
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

        </section>


    </section>
</x-customers.app-layout>