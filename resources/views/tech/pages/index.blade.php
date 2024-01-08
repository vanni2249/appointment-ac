<x-tech.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>
    <section class="container mx-auto pb-8 space-y-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Tarjeta de ventas -->
            <div class="bg-gray-200 shadow rounded-lg px-6 py-4">
                <h2 class="text-lg font-medium text-gray-800">Ganancia</h2>
                <p class="text-3xl font-semibold text-gray-900 mt-4">$50,000</p>
                <p class="text-sm font-medium text-gray-500 mt-2">Este ano</p>
            </div>
            
            <!-- Tarjeta de consulta -->
            <div class="bg-gray-200 shadow rounded-lg px-6 py-4">
                <h2 class="text-lg font-medium text-gray-800">Instalacion</h2>
                <p class="text-3xl font-semibold text-gray-900 mt-4">7</p>
                <p class="text-sm font-medium text-gray-500 mt-2">Equipos instalados</p>
            </div>
            <!-- Tarjeta de mantenimiento -->
            <div class="bg-gray-200 shadow rounded-lg px-6 py-4">
                <h2 class="text-lg font-medium text-gray-800">Mantenimiento</h2>
                <p class="text-3xl font-semibold text-gray-900 mt-4">15</p>
                <p class="text-sm font-medium text-gray-500 mt-2">Equipos en mantenimiento</p>
            </div>

            <!-- Tarjeta de diagnóstico -->
            <div class="bg-gray-200 shadow rounded-lg px-6 py-4">
                <h2 class="text-lg font-medium text-gray-800">Diagnóstico</h2>
                <p class="text-3xl font-semibold text-gray-900 mt-4">10</p>
                <p class="text-sm font-medium text-gray-500 mt-2">Nuevos diagnósticos este mes</p>
            </div>


        </div>
        <x-card-index>
            <x-slot:title>
                Ultimos 10 trabajos 
            </x-slot:title>
            <x-slot:menu>
    
            </x-slot:menu>
            <x-slot:items>
                <div>
                    <a href="{{ route('tech.works.show', ['work'=>1]) }}">
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
    </section>
</x-tech.app-layout>