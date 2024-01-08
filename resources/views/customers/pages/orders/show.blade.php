<x-customers.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                {{ __('Orden') }}
            </h2>
        </div>
    </x-slot>
    <x-card-show>
        <x-slot:blocks>
            <div class="bg-white p-4 rounded col-span-12">
                <div class="flex justify-between">
                    {{-- <span>Orden</span> --}}
                    <span class="font-black">4679812</span>
                </div>
            </div>
            <div class="bg-white p-4 rounded col-span-12 md:col-span-4">
                <h2>Fecha de la orden</h2>
                <ul class="mt-2 text-gray-500 text-sm">
                    <li>28/2/2022 21:03:53</li>
                </ul>
            </div>
            <a href="{{ route('admin.users.show', ['user'=>1]) }}"
                class="block bg-white hover:bg-gray-100 p-4 rounded col-span-12 md:col-span-4">
                <h2>Tecnico</h2>
                <ul class="mt-2 text-gray-500 text-sm">
                    <li>Geovanni Colon</li>
                </ul>
            </a>
            <div class="bg-white p-4 rounded col-span-12 md:col-span-4">
                <h2>Locacion</h2>
                <ul class="mt-2 text-gray-500 text-sm">
                    <li>Urbanizacion Villas del prado</li>
                    <li>Calle del Sol 125</li>
                    <li>Juana Diaz PR 00795</li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded col-span-12 lg:col-span-8 space-y-2">
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
            <div class="bg-white p-4 rounded col-span-12 lg:col-span-4">
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
                        <span>$260.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Balance:</span>
                        <span>$300.00</span>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded col-span-12">
                <h2>Transacciones</h2>
                <ul class="my-2 text-gray-500 list-disc list-inside space-y-2">
                    <li
                        class="flex flex-col md:flex-row md:justify-between bg-gray-50 py-1 px-2 md:items-center rounded">
                        <span>
                            <ul>
                                <li class="font-black text-gray-800">21/02/2023 21:34:34</li>
                                <li class="text-sm">Transaccion completada</li>
                                <li class="text-xs italic">Pago del aire acondicionado mini split 12,000 btu</li>
                            </ul>
                        </span>
                        <span class="text-green-600">$260.00</span>
                    </li>
                    <li
                        class="flex flex-col md:flex-row md:justify-between bg-gray-50 py-1 px-2 md:items-center rounded">
                        <span>
                            <ul>
                                <li class="font-black text-gray-800">21/02/2023 21:34:34</li>
                                <li class="text-sm">Transaccion fallida</li>
                                <li class="text-xs italic">Pago del aire acondicionado mini split 12,000 btu</li>
                            </ul>
                        </span>
                        <span class="text-red-600">$260.00</span>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded col-span-12">
                <h2>Observaciones</h2>
                <p class="text-sm text-gray-600">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia neque distinctio qui, aut
                    dolor optio ut fuga eligendi, modi veniam rem dolorum quae ullam tempore reprehenderit, ab
                    repellat ducimus sequi!
                </p>
            </div>
        </x-slot:blocks>
    </x-card-show>
</x-customers.app-layout>