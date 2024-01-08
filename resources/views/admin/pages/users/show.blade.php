<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Usuario') }}
            </h2>
        </div>
    </x-slot>
    <section class="container mx-auto pb-8">
        <div class="bg-gray-100 shadow rounded-xl p-4">
            <div class="grid grid-cols-6 gap-4">
                <div class="bg-white p-4 rounded col-span-6 md:col-span-2">
                    <h2>Nombre</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>Geovanni Colon</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded col-span-6 md:col-span-2">
                    <h2>Roles</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>Administrador</li>
                        <li>Activo</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded col-span-6 md:col-span-2">
                    <h2>Contacto</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>vanni2249@gmail.com</li>
                        <li>210-665-6749</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded col-span-6 lg:col-span-6 space-y-2">
                    <h2>Ultimas 5 ordenes</h2>
                    <a href="" class="bg-gray-50 hover:bg-gray-200 p-4 rounded block">
                        <div>
                            <h2>Orden</h2>
                            <ul class="my-2 text-gray-500 text-sm">
                                <li class="line-clamp-1">
                                    6581786187
                                </li>
                                <li>
                                    27/02/2023 13:34:54
                                </li>

                            </ul>
                            <h2>Producto</h2>
                            <ul class="my-2 text-gray-500 text-sm">
                                <li class="line-clamp-1">
                                    Aire acondicionado mini split 12,000 btu
                                </li>
                                <li class="flex justify-between ml-6">
                                    <span>$459.00 x 1</span>
                                    <span>$459.00</span>
                                </li>
                            </ul>
                            <h2>Servicio de instalacion</h2>
                            <ul class="my-2 text-gray-500 text-sm">
                                <li class="line-clamp-1">
                                    Instalacion de aire acondicionado mini split 12,000 btu
                                </li>
                                <li class="flex justify-between ml-6">
                                    <span>$150.00 x 1</span>
                                    <span>$150.00</span>
                                </li>
                            </ul>
                            <h2>Fecha de instalacion</h2>
                            <ul class="my-2 text-gray-500 text-sm">
                                <li>28/2/2022</li>
                                <li class=" ml-6">En la manana</li>
                            </ul>

                        </div>

                    </a>
                    <a href="" class="bg-gray-50 hover:bg-gray-200 p-4 rounded block">
                        <div>
                            <h2>Orden</h2>
                            <ul class="my-2 text-gray-500 text-sm">
                                <li class="line-clamp-1">
                                    6581786187
                                </li>
                                <li>
                                    27/02/2023 13:34:54
                                </li>

                            </ul>
                            <h2>Servicio Mantenimiento</h2>
                            <ul class="my-2 text-gray-500 text-sm">
                                <li class="line-clamp-1">
                                    Aire acondicionado mini split 12,000 btu
                                </li>
                                <li class="flex justify-between ml-6">
                                    <span>$60.00 x 1</span>
                                    <span>$60.00</span>
                                </li>
                            </ul>
                        </div>

                    </a>
                </div>
                <div class="bg-white p-4 rounded col-span-6">
                    <h2>Ultimas 5 transacciones</h2>
                    <div class="space-y-2">
                        <a href="" class="bg-gray-50 hover:bg-gray-200 p-4 rounded block">
                            <ul>
                                <li class="font-black text-gray-800">21/02/2023 21:34:34</li>
                                <li class="text-sm">Transaccion completada</li>
                                <li class="text-xs italic">Pago del aire acondicionado mini split 12,000 btu</li>
                            </ul>
                        </a>
                        <a href="" class="bg-gray-50 hover:bg-gray-200 p-4 rounded block">
                            <ul>
                                <li class="font-black text-gray-800">21/02/2023 21:34:34</li>
                                <li class="text-sm">Transaccion fallida</li>
                                <li class="text-xs italic">Pago del aire acondicionado mini split 12,000 btu</li>
                            </ul>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin.app-layout>