<x-tech.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Facturas') }}
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
            {{-- head --}}
            <div>
                <ul class="px-4 hidden lg:grid grid-cols-5 text-xs uppercase font-semibold text-gray-500">
                    <li>#</li>
                    <li>Semana</li>
                    <li>Dia de pago</li>
                    <li>Trabajos</li>
                    <li>Cantidad</li>
                </ul>
            </div>
            {{-- items --}}
            <div>
                <a href="{{ route('tech.invoices.show', ['invoice'=>1]) }}">
                    <div class="bg-white hover:bg-gray-100 p-4 rounded">
                        {{-- Mobile --}}
                        <ul class="lg:hidden flex justify-between items-center text-sm">
                            <li class="flex flex-col">
                                <span class=" font-semibold">
                                    $560.00
                                </span>
                                <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                    12 mayo
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
                        <ul class="hidden lg:grid grid-cols-5 items-center text-sm">
                            <li>
                                <span class="font-semibold">
                                    268181998
                                </span>
                                {{-- <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                   12 mayo
                                </span> --}}
                            </li>
                            <li>
                                <span class="font-semibold">
                                    30 abril -  6 mayo
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    12 mayo
                                </span>
                                {{-- <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    Urb. Villas del Prado
                                </span> --}}
                            </li>
                            <li>
                                <span class="font-semibold">
                                    12
                                </span>
                                {{-- <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    Tarde
                                </span> --}}
                            </li>
                            <li>
                                <span class="font-semibold">
                                    $560.00

                                </span>
                                {{-- <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    En proceso
                                </span> --}}
                            </li>
                        </ul>

                    </div>
                </a>
            </div>
        </x-slot:items>

    </x-card-index>
</x-tech.app-layout>