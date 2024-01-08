<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Transaccion') }}
            </h2>
        </div>
    </x-slot>
    <section class="container mx-auto pb-8">
        <div class="bg-gray-100 shadow rounded-xl p-4">
            <div class="grid grid-cols-6 gap-4">
                <div class="bg-white p-4 rounded col-span-6">
                    <div class="flex justify-between">
                        <span>En linea</span>
                        <span class="font-black">4679812</span>
                    </div>
                </div>
                <div class="bg-white p-4 rounded col-span-6 md:col-span-2">
                    <h2>Fecha de la transaccion</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>28/2/2022 21:03:53</li>
                    </ul>
                </div>
                {{-- <div class="bg-white p-4 rounded col-span-6 md:col-span-2">
                    <h2>Orden</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>
                            <a href="{{ route('admin.orders.show', ['order'=>1]) }}">
                                21816871
                            </a>
                        </li>
                    </ul>
                </div> --}}
                <a href="{{ route('admin.orders.show', ['order'=>1]) }}"
                    class="block bg-white hover:bg-gray-200 p-4 rounded col-span-6 md:col-span-2">
                    <h2>Orden:</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>
                            18798719
                        </li>
                    </ul>
                </a>
                <div class="bg-white p-4 rounded col-span-6 md:col-span-2">
                    <h2>Status</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>Completada</li>

                    </ul>
                </div>
                <a href="{{ route('admin.users.show', ['user'=>1]) }}"
                    class="block bg-white hover:bg-gray-200 p-4 rounded col-span-6 md:col-span-3">
                    <h2>Porcesado por:</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>
                            Kariani A Colon
                        </li>
                    </ul>
                </a>
                <a href="{{ route('admin.users.show', ['user'=>1]) }}"
                    class="block bg-white hover:bg-gray-200 p-4 rounded col-span-6 md:col-span-3">
                    <h2>Para:</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>
                            Geovanni Colon
                        </li>
                    </ul>
                </a>
                {{-- <div class="bg-white p-4 rounded col-span-6 md:col-span-3">
                    <h2>Para:</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>Geovanni Colon</li>

                    </ul>
                </div> --}}
                <div class="bg-white p-4 rounded col-span-6 lg:col-span-4 space-y-2">
                    <div class="bg-gray-50 p-4 rounded">
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
                    <div class="bg-gray-50 p-4 rounded">
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
                </div>
                <div class="bg-white p-4 rounded col-span-6 lg:col-span-2">
                    <h2>Balance</h2>
                    <ul class="my-2 text-gray-500 text-sm">
                        <li class="flex justify-between pb-4">
                            <span>Sub total:</span>
                            <span>$560.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Tax Municipal:</span>
                            <span>$5.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Tax Estatal</span>
                            <span>$34.00</span>
                        </li>
                        <li class="flex justify-between py-4">
                            <span>Total:</span>
                            <span>$560.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Pago:</span>
                            <span>$560.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Balance:</span>
                            <span>$0.00</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-admin.app-layout>