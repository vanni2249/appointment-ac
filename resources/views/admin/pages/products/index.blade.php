<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Productos') }}
            </h2>
            <div class="flex flex-row space-x-2">
                <x-sidebar-form title="crear producto" type='btn'>
                    form crear producto
                </x-sidebar-form>
                <x-sidebar-form title="filtrar producto" type='btn'>
                    filtra producto
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
            <div>
                <a href="{{ route('admin.orders.show', ['order'=>1]) }}">
                    <div class="bg-white hover:bg-gray-200 p-4 rounded">
                        {{-- Mobile --}}
                        <ul class="md:hidden flex justify-between items-center text-sm">
                            <li class="flex flex-col">
                                <span class=" font-semibold">
                                    AIRE ACONDICIONADO SPLIT 12,000 BTU
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
                        <ul class="hidden md:grid grid-cols-5 text-sm items-center">
                            <li>
                                <span class="font-semibold">
                                    Aire acondicionado inverter 12,000 btu
                                </span>
                                <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                    Inverter
                                </span>
                            </li>
                            {{-- <li>
                                <span class="font-semibold">
                                    Mantenimieno
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    4 unidades
                                </span>
                            </li> --}}
                            <li>
                                <span class="font-semibold">
                                    $450.00
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    + $150.00
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    14
                                </span>
                                {{-- <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    Tarde
                                </span> --}}
                            </li>
                            <li>
                                <span class="font-semibold">
                                    $6,300.00

                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    $2,100.00
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    $8,400.00
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
                                    AIRE ACONDICIONADO SPLIT 12,000 BTU
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
                        <ul class="hidden md:grid grid-cols-5 text-sm items-center">
                            <li>
                                <span class="font-semibold">
                                    Aire acondicionado inverter 12,000 btu
                                </span>
                                <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                    Inverter
                                </span>
                            </li>
                            {{-- <li>
                                <span class="font-semibold">
                                    Mantenimieno
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    4 unidades
                                </span>
                            </li> --}}
                            <li>
                                <span class="font-semibold">
                                    $450.00
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    + $150.00
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    14
                                </span>
                                {{-- <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    Tarde
                                </span> --}}
                            </li>
                            <li>
                                <span class="font-semibold">
                                    $6,300.00

                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    $2,100.00
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    $8,400.00
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
                                    AIRE ACONDICIONADO SPLIT 12,000 BTU
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
                        <ul class="hidden md:grid grid-cols-5 text-sm items-center">
                            <li>
                                <span class="font-semibold">
                                    Aire acondicionado inverter 12,000 btu
                                </span>
                                <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                    Inverter
                                </span>
                            </li>
                            {{-- <li>
                                <span class="font-semibold">
                                    Mantenimieno
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    4 unidades
                                </span>
                            </li> --}}
                            <li>
                                <span class="font-semibold">
                                    $450.00
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    + $150.00
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    14
                                </span>
                                {{-- <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    Tarde
                                </span> --}}
                            </li>
                            <li>
                                <span class="font-semibold">
                                    $6,300.00

                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    $2,100.00
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    $8,400.00
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
                                    AIRE ACONDICIONADO SPLIT 12,000 BTU
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
                        <ul class="hidden md:grid grid-cols-5 text-sm items-center">
                            <li>
                                <span class="font-semibold">
                                    Aire acondicionado inverter 12,000 btu
                                </span>
                                <span class="text-xs font-medium text-gray-500  line-clamp-1">
                                    Inverter
                                </span>
                            </li>
                            {{-- <li>
                                <span class="font-semibold">
                                    Mantenimieno
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    4 unidades
                                </span>
                            </li> --}}
                            <li>
                                <span class="font-semibold">
                                    $450.00
                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    + $150.00
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    14
                                </span>
                                {{-- <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    Tarde
                                </span> --}}
                            </li>
                            <li>
                                <span class="font-semibold">
                                    $6,300.00

                                </span>
                                <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                    $2,100.00
                                </span>
                            </li>
                            <li>
                                <span class="font-semibold">
                                    $8,400.00
                                </span>

                            </li>
                        </ul>

                    </div>
                </a>
            </div>
        </x-slot:items>

    </x-card-index>
</x-admin.app-layout>