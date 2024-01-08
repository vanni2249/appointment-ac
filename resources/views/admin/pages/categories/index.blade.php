<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Categorias') }}
            </h2>
            <div class="flex flex-row space-x-2">
                <x-sidebar-form title="crear categoria" type='btn'>
                    form crear categoria
                </x-sidebar-form>

            </div>
        </div>
    </x-slot>
    <x-card-index>
        <x-slot:title>
            10 de 10 total 10
        </x-slot:title>
        <x-slot:menu>
            {{-- <input type="text" name="" id="" class="rounded-full"> --}}
        </x-slot:menu>
        <x-slot:items>
            {{-- head --}}
            <div>
                <ul class="px-4 hidden lg:grid grid-cols-5 text-xs uppercase font-semibold text-gray-500">
                    <li>Categoria</li>
                    <li>Tipo</li>
                    <li>Habilitado</li>
                    <li>Desabilitado</li>
                    <li>Total</li>
                </ul>
            </div>
            {{-- items --}}
            <div>
                <a href="{{ route('admin.orders.show', ['order'=>1]) }}">
                    <div class="bg-white hover:bg-gray-200 p-4 rounded">
                        {{-- Mobile --}}
                        <ul class="md:hidden flex justify-between items-center text-sm">
                            <li class="flex flex-col">
                                <span class=" font-semibold">
                                    Inverter
                                </span>
                                <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                    Producto
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
                        <ul class="hidden md:grid grid-cols-5 text-sm items-center">
                            <li>
                                <span class="font-semibold">
                                    Inverter
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    Producto
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    2
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    0

                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    2
                                </span>

                            </li>
                        </ul>

                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('admin.orders.show', ['order'=>1]) }}">
                    <div class="bg-white hover:bg-gray-200 p-4 rounded">
                        {{-- Mobile --}}
                        <ul class="md:hidden flex justify-between items-center text-sm">
                            <li class="flex flex-col">
                                <span class=" font-semibold">
                                    Mantenimineto
                                </span>
                                <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                    Producto
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
                        <ul class="hidden md:grid grid-cols-5 text-sm items-center">
                            <li>
                                <span class="font-semibold">
                                    Mantenimineto
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    Producto
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    2
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    0

                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    2
                                </span>

                            </li>
                        </ul>

                    </div>
                </a>
            </div>
            <div>
                <a href="{{ route('admin.orders.show', ['order'=>1]) }}">
                    <div class="bg-white hover:bg-gray-200 p-4 rounded">
                        {{-- Mobile --}}
                        <ul class="md:hidden flex justify-between items-center text-sm">
                            <li class="flex flex-col">
                                <span class=" font-semibold">
                                    Instalacion
                                </span>
                                <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                    Producto
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
                        <ul class="hidden md:grid grid-cols-5 text-sm items-center">
                            <li>
                                <span class="font-semibold">
                                    Instalacion
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    Producto
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    2
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    0

                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    2
                                </span>

                            </li>
                        </ul>

                    </div>
                </a>
            </div>
        </x-slot:items>

    </x-card-index>
</x-admin.app-layout>