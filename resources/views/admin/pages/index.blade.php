<x-admin.app-layout>
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
                <h2 class="text-lg font-medium text-gray-800">Ventas</h2>
                <p class="text-3xl font-semibold text-gray-900 mt-4">$50,000</p>
                <p class="text-sm font-medium text-gray-500 mt-2">Este mes</p>
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

            <!-- Tarjeta de consulta -->
            <div class="bg-gray-200 shadow rounded-lg px-6 py-4">
                <h2 class="text-lg font-medium text-gray-800">Consulta</h2>
                <p class="text-3xl font-semibold text-gray-900 mt-4">75%</p>
                <p class="text-sm font-medium text-gray-500 mt-2">Tasa de satisfacción del cliente</p>
            </div>

        </div>
        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-4 lg:col-span-1 space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-1 gap-4">
                    {{-- <div class="flex flex-col sm:flex-row lg:flex-col gap-4"> --}}
                        <div class="bg-white rounded-lg shadow overflow-hidden">
                            <header class="pt-6 pb-2 px-4 bg-gray-200">
                                <h2 class="text-lg">Top Venta</h2>
                            </header>
                            <table class="min-w-full">
                                <tbody class="divide-y divide-gray-300 text-sm">
                                    <tr>
                                        <td class="py-3 px-4">Villas del Prado</td>
                                        <td class="py-3 px-4 text-right">$100,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Colinas del Prado</td>
                                        <td class="py-3 px-4  text-right">$90,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Paseo de Reyes</td>
                                        <td class="py-3 px-4  text-right">$80,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Paseo de Reyes</td>
                                        <td class="py-3 px-4  text-right">$70,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Los Ucares</td>
                                        <td class="py-3 px-4  text-right">$60,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-white rounded-lg shadow overflow-hidden">
                            <header class="pt-6 pb-2 px-4 bg-gray-200">
                                <h2 class="text-lg">Top Mantenimiento</h2>
                            </header>
                            <table class="min-w-full">
                                <tbody class="divide-y divide-gray-300 text-sm">
                                    <tr>
                                        <td class="py-3 px-4">Villas del Prado</td>
                                        <td class="py-3 px-4  text-right">$100,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Colinas del Prado</td>
                                        <td class="py-3 px-4 text-right">$90,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Paseo de Reyes</td>
                                        <td class="py-3 px-4 text-right">$80,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Paseo de Reyes</td>
                                        <td class="py-3 px-4 text-right">$70,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Los Ucares</td>
                                        <td class="py-3 px-4 text-right">$60,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bg-white rounded-lg shadow overflow-hidden">
                            <header class="pt-6 pb-2 px-4 bg-gray-200">
                                <h2 class="text-lg">Top Diagnóstico</h2>
                            </header>
                            <table class="min-w-full">
                                <tbody class="divide-y divide-gray-300 text-sm">
                                    <tr>
                                        <td class="py-3 px-4">Villas del Prado</td>
                                        <td class="py-3 px-4 text-right">$100,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Colinas del Prado</td>
                                        <td class="py-3 px-4 text-right">$90,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Paseo de Reyes</td>
                                        <td class="py-3 px-4 text-right">$80,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Paseo de Reyes</td>
                                        <td class="py-3 px-4 text-right">$70,000</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4">Los Ucares</td>
                                        <td class="py-3 px-4 text-right">$60,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="col-span-4 lg:col-span-3">
                    <x-card-index>
                        <x-slot:title>
                            Ultimas 10 ordenes
                        </x-slot:title>
                        <x-slot:menu>
                            {{-- <input type="text" name="" id="" class="rounded-full"> --}}
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

                </div>
            </div>
            <div>
                <!-- Tabla de ordenes -->

            </div>
    </section>
</x-admin.app-layout>