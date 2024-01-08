<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Ordenes') }}
            </h2>
            <div x-data="{ open: false }" class="flex flex-col space-y-2">
                <div>
                    <button @click="open = ! open"
                        class="border py-2 px-4 rounder text-xs font-semibold uppercase rounded">Filtro</button>
                </div>
                <div x-cloak x-show="open" x-transition:enter.scale.80 x-transition:leave.scale.90
                    class="bg-gray-200 rounded-lg p-4 ">
                    <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                        <div class="space-y-2">
                            <div>
                                <x-input-label>Numero de orden</x-input-label>
                                <input type="text" class="input" placeholder="ej. 12345678">
                            </div>
                            <div>
                                <x-input-label>Dia de la orden</x-input-label>
                                <input type="date" class="input">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <x-input-label>Tipo de orden</x-input-label>
                                <select name="" id="" class="input">
                                    <option value="">Escoger</option>
                                    <option value="">Instalacion</option>
                                    <option value="">Mantenimiento</option>
                                    <option value="">Diagnostico</option>
                                    <option value="">Reparacion</option>
                                    <option value="">Consulta</option>
                                </select>
                            </div>
                            <div>
                                <x-input-label>Unidades</x-input-label>
                                <select name="" id="" class="input">
                                    <option value="">Escoger</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <x-input-label>Pueblo</x-input-label>
                                <select name="" id="" class="input">

                                    <option value="">Escoger</option>
                                    <option value="">Juana Diaz</option>
                                    <option value="">Santa Isabel</option>
                                    <option value="">Salinas</option>
                                </select>
                            </div>
                            <div>
                                <x-input-label>Dirreccion</x-input-label>
                                <select name="" id="" class="input">
                                    <option value="">Escoger</option>
                                    <option value="">Villas del prado</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <x-input-label>Dia de servicio</x-input-label>
                                <input type="date" name="" id="" class="input">
                            </div>
                            <div>
                                <x-input-label>Tipo de dirreccion</x-input-label>
                                <select name="" id="" class="input">
                                    <option value="">Escoger</option>
                                    <option value="">En la manana</option>
                                    <option value="">En la tarde</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div>
                                <x-input-label>Tecnico</x-input-label>
                                <select name="" id="" class="input">
                                    <option value="">Escoger</option>
                                    <option value="">En la manana</option>
                                    <option value="">En la tarde</option>
                                </select>
                            </div>
                            <div>
                                <x-input-label>Status</x-input-label>
                                <select name="" id="" class="input">
                                    <option value="">Escoger</option>
                                    <option value="">No asignado</option>
                                    <option value="">Asignado</option>
                                    <option value="">En Proceso</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                <a href="{{ route('admin.orders.show', ['order'=>1]) }}">
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
</x-admin.app-layout>