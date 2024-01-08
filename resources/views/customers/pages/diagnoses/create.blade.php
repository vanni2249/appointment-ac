<x-customers.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            {{ __('Solicitar diagnostico') }}
        </h2>
    </x-slot>
    <section class="container mx-auto space-y-8">
        <p class="text-xl inline-block">
            Ofrecemos un servicio de diagnóstico y reparación de aire acondicionado confiable y eficiente para hogares y negocios.
        </p>
        <div>
            <label for="" class="block text-sm uppercase font-black text-gray-500">Selecciona el pueblo</label>
            <select name="" id="" class="rounded  line-clamp-1 w-full md:w-auto">
                <option value="">Seleccione</option>
                <option value="">Juana Diaz</option>
                <option value="">Santa Isabel</option>
                <option value="">Salinas</option>
            </select>
        </div>
        <div>
            <label for="" class="block text-sm uppercase font-black text-gray-500">Selecciona su direccion</label>
            <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2">
                <select name="" id="" class="rounded line-clamp-1 w-full md:w-auto">
                    <option value="">Seleccione</option>
                    <option value="" class="flex flex-col">
                        Urb. Villas del prado
                        Calle del Sol
                        Juana Diaz, PR 0795
                    </option>
                </select>
                <button class="bg-blue-500 hover:bg-blue-700 py-2 px-4 text-white rounded">Anadir nueva dirreccion</button>

            </div>
        </div>
        <div>
            <label for="" class="block text-sm uppercase font-black text-gray-500">Selecciona el dia</label>
            <div class="flex flex-row gap-4 overflow-x-auto no-scrollbar touch-auto bg-white">
                <div
                    class="whitespace-nowrap bg-gray-100 px-4 py-1 rounded-full border border-gray-300 cursor-pointer">
                    Manana 22 feb.
                    2023
                </div>
                <div
                    class="whitespace-nowrap bg-gray-100 px-4 py-1 rounded-full border border-gray-100 hover:border-gray-300 cursor-pointer">
                    Viernes 23 feb. 2023</div>
                <div
                    class="whitespace-nowrap bg-gray-100 px-4 py-1 rounded-full border border-gray-100 hover:border-gray-300 cursor-pointer">
                    Sabado 24 feb. 2023</div>
                <div
                    class="whitespace-nowrap bg-gray-100 px-4 py-1 rounded-full border border-gray-100 hover:border-gray-300 cursor-pointer">
                    Lunes 26 feb. 2023</div>
                <div
                    class="whitespace-nowrap bg-gray-100 px-4 py-1 rounded-full border border-gray-100 hover:border-gray-300 cursor-pointer">
                    Martes 27 feb. 2023</div>
                <div
                    class="whitespace-nowrap bg-gray-100 px-4 py-1 rounded-full border border-gray-100 hover:border-gray-300 cursor-pointer">
                    Miercoles 28 feb. 2023</div>
                <div
                    class="whitespace-nowrap bg-gray-100 px-4 py-1 rounded-full border border-blue-100 hover:border-gray-300 cursor-pointer">
                    Jueves 01 mar. 2023</div>
            </div>

        </div>
        <div>
            <label for="" class="block text-sm uppercase font-black text-gray-500">Selecciona el tiempo</label>
            <div class="flex flex-row gap-2 items-center">
                <div class="bg-gray-100 py-1 px-8 rounded-full">AM</div>
                <div class="bg-gray-100 py-1 px-8 rounded-full">PM</div>
            </div>

        </div>
        <div>
            {{-- <label for="" class="block text-sm uppercase font-black text-gray-500">Selecciona la unidad</label> --}}
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
                <div class="bg-gray-100 p-4 rounded ">
                    <div class="uppercase tracking-wide text-sm text-gray-500 font-semibold">Aire acondicionado split
                        12,000 BTU, 18,000 BTU, 24,000 BTU, 36,000 BTU</div>

                    <div class="mt-4">
                        <span class="block mt-1 text-lg leading-tight font-medium text-black">$25</span>

                    </div>
                </div>
                
            </div>

        </div>
        
        <div class="pb-16">
            <button class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-full">Anadir al carrito de
                compra</button>

        </div>
    </section>
</x-customers.app-layout>