<x-customers.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            {{ __('Orden en proceso') }}
        </h2>
    </x-slot>
    <x-card-show>
        <x-slot:blocks>
            <div class="bg-white p-4 rounded col-span-12">
                <h2>Locacion</h2>
                <ul class="mt-2 text-gray-500">
                    <li>Urbanizacion Villas del prado</li>
                    <li>Calle del Sol 125</li>
                    <li>Juana Diaz PR 00795</li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded col-span-12 lg:col-span-8 space-y-4">
                <div class="bg-gray-50 p-4 rounded">
                    <h2>Productos</h2>
                    <ul class="my-2 text-gray-500">
                        <li class="line-clamp-1">
                            Aire acondicionado mini split 12,000 btu
                        </li>
                        <li class="flex justify-between ml-6">
                            <span>$459.00 x 1</span>
                            <span>$459.00</span>
                        </li>
                    </ul>
                    <h2>Servicio de instalacion</h2>
                    <ul class="my-2 text-gray-500">
                        <li class="line-clamp-1">
                            Instalacion de aire acondicionado mini split 12,000 btu
                        </li>
                        <li class="flex justify-between ml-6">
                            <span>$150.00 x 1</span>
                            <span>$150.00</span>
                        </li>
                    </ul>
                    <div class="flex space-x-2">
                        <div class="flex">
                            <button class="border border-gray-500 rounded-l-full text-sm px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
        
                            </button>
                            <input type="text" name="" id="" class="w-8 p-1 text-center border-x-0 border-gray-500" value="1" readonly>
                            <button  class="border border-gray-500 rounded-r-full text-sm px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                </svg>
        
                            </button>
                        </div>
                        <button class="bg-red-300 hover:bg-red-400 border border-red-500 px-4 rounded-full text-red-800 font-black">Borrar</button>
                    </div>
                </div>
                <div class="bg-gray-50 p-4 rounded">
                    <h2>Productos</h2>
                    <ul class="my-2 text-gray-500">
                        <li class="line-clamp-1">
                            Aire acondicionado mini split 18,000 btu
                        </li>
                        <li class="flex justify-between ml-6">
                            <span>$759.00 x 1</span>
                            <span>$759.00</span>
                        </li>
                    </ul>
                    <h2>Servicio de instalacion</h2>
                    <ul class="my-2 text-gray-500">
                        <li class="line-clamp-1">
                            Instalacion de aire acondicionado mini split 18,000 btu
                        </li>
                        <li class="flex justify-between ml-6">
                            <span>$175.00 x 1</span>
                            <span>$175.00</span>
                        </li>
                    </ul>
                    <div class="flex space-x-2">
                        <div class="flex">
                            <button class="border border-blue-500 rounded-l-full text-sm px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 4.5v15m7.5-7.5h-15" />
                                </svg>
        
                            </button>
                            <input type="text" name="" id="" class="w-8 p-1 text-center border-x-0 border-blue-500" value="1" readonly>
                            <button  class="border border-blue-500 rounded-r-full text-sm px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                </svg>
        
                            </button>
                        </div>
                        <button class="bg-red-300 hover:bg-red-400 border border-red-500 px-4 rounded-full text-red-800 font-black">Borrar</button>
                    </div>
                </div>
            </div>
            <div class="bg-white p-4 rounded col-span-12 lg:col-span-4">
                <h2>Balance</h2>
                <ul class="my-2 text-gray-500 ">
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
                <div class="pt-4">
                    <button class="bg-yellow-500 hover:bg-yellow-600 w-full py-2 rounded-full font-bold">Procesar el
                        pago</button>
                </div>
            </div>

        </x-slot:blocks>
    </x-card-show>
    <section class="container mx-auto pb-8">
        <div class="bg-gray-100 rounded-xl p-4">
            <div class="grid grid-cols-4 gap-4">

            </div>
        </div>
    </section>
</x-customers.app-layout>