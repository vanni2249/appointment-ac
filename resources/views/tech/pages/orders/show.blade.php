<x-tech.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Orden') }}
            </h2>
        </div>
    </x-slot>
    <section class="container mx-auto pb-8">
        <div class="bg-gray-100 shadow rounded-xl p-4">
            <div class="grid grid-cols-6 gap-4">
                <div class="bg-white p-4 rounded col-span-6">
                    <div class="flex justify-between">
                        <span>Orden</span>
                        <span class="font-black">4679812</span>
                    </div>
                </div>
                <div class="bg-white p-4 rounded col-span-6 md:col-span-2">
                    <h2>Fecha de la orden</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>28/2/2022 21:03:53</li>
                    </ul>
                </div>
                <div class="block bg-white p-4 rounded col-span-6 md:col-span-2">
                    <h2>Tecnico</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>Geovanni Colon</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded col-span-6 md:col-span-2">
                    <h2>Locacion</h2>
                    <ul class="mt-2 text-gray-500 text-sm">
                        <li>Urbanizacion Villas del prado</li>
                        <li>Calle del Sol 125</li>
                        <li>Juana Diaz PR 00795</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded col-span-6 lg:col-span-4 space-y-2">
                    <div class="bg-gray-50 p-4 rounded">
                        <h2>Servicio de instalacion</h2>
                        <ul class="my-2 text-gray-500 text-sm">
                            <li class="line-clamp-1">
                                Instalacion de aire acondicionado mini split 12,000 btu
                            </li>
                            <li class="flex justify-between ml-6">
                                <span>$150.00 x 1</span>
                                <span>$150.00</span>
                            </li>
                            <li class=" flex space-x-2 ml-6">
                                <span class="text-xs text-gray-700 font-semibold">28/2/2022</span>
                                <span class="text-xs">En la tarde</span>
                            </li>
                        </ul>

                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h2>Servicio de instalacion</h2>
                        <ul class="my-2 text-gray-500 text-sm">
                            <li class="line-clamp-1">
                                Instalacion de aire acondicionado mini split 12,000 btu
                            </li>
                            <li class="flex justify-between ml-6">
                                <span>$150.00 x 1</span>
                                <span>$150.00</span>
                            </li>
                            <li class=" flex space-x-2 ml-6">
                                <span class="text-xs text-gray-700 font-semibold">28/2/2022</span>
                                <span class="text-xs">En la tarde</span>
                            </li>
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
                            <span>$0.00</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Balance:</span>
                            <span>$560.00</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded col-span-6">
                    <h2>Observaciones</h2>
                    <p class="text-sm text-gray-600">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia neque distinctio qui, aut dolor optio ut fuga eligendi, modi veniam rem dolorum quae ullam tempore reprehenderit, ab repellat ducimus sequi!
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-tech.app-layout>