<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Trabajos') }}
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
                <a href="{{ route('admin.works.show', ['work'=>1]) }}">
                    <div class="bg-white hover:bg-gray-100 p-4 rounded">
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
                            <li class="flex flex-col">
                                <span class="font-semibold">
                                    487634323
                                </span>
                                <span class="text-xs font-medium text-gray-500">
                                    03/13/2023
                                </span>
                            </li>
                            <li class="flex flex-col">
                                <span class="font-semibold">
                                    Tarde
                                </span>
                            </li>
                            <li class="flex flex-col">
                                <span class="font-semibold">
                                    Mantenimeinto
                                </span>
                                <span class="text-xs font-medium text-gray-500">
                                    1 unidad
                                </span>
                            </li>
                            <li class="flex flex-col">
                                <span class="font-semibold">
                                    Juana Diaz
                                </span>
                                <span class="text-xs font-medium text-gray-500">
                                    Urb Villas del Prado
                                </span>
                            </li>
                            <li class="flex flex-col">
                                <span class="font-semibold">
                                    $60.00
                                </span>
                                <span class="text-xs font-medium text-gray-500">
                                    Completado
                                </span>
                            </li>
                           
                        </ul>

                    </div>
                </a>
            </div>
        </x-slot:items>

    </x-card-index>
    
</x-admin.app-layout>