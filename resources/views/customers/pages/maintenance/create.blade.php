<x-customers.app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            {{ __('Solicitar mantenimiento') }}
        </h2>
    </x-slot>
    <section class="container mx-auto space-y-8">
        <p class="text-xl inline-block">
            Ofrecemos un servicio de limpieza de aire acondicionado completo y eficiente para hogares y negocios.
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
            <div class="flex flex-row gap-4 overflow-x-auto md:no-scrollbar md:touch-auto bg-white">
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
                    class="whitespace-nowrap bg-gray-100 px-4 py-1 rounded-full border border-gray-100 hover:border-gray-300 cursor-pointer">
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
            <label for="" class="block text-sm uppercase font-black text-gray-500">Selecciona la unidad</label>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
                <div class="bg-gray-100 border border-gray-300 cursor-pointer p-4 rounded ">
                    <div class="uppercase tracking-wide text-sm text-gray-500 font-semibold">Aire acondicionado split
                        12,000 BTU</div>

                    <div class="mt-4">
                        <span class="block mt-1 text-lg leading-tight font-medium text-black">$70</span>

                    </div>
                </div>
                <div class="bg-gray-100 border border-gray-100 hover:border-gray-300 cursor-pointer p-4 rounded ">
                    <div class="uppercase tracking-wide text-sm text-gray-500 font-semibold">Aire acondicionado split
                        18,000 BTU</div>

                    <div class="mt-4">
                        <span class="block mt-1 text-lg leading-tight font-medium text-black">$80</span>


                    </div>
                </div>
                <div class="bg-gray-100 border border-gray-100 hover:border-gray-300 cursor-pointer p-4 rounded ">
                    <div class="uppercase tracking-wide text-sm text-gray-500 font-semibold">Aire acondicionado split
                        24,000 BTU</div>

                    <div class="mt-4">
                        <span class="block mt-1 text-lg leading-tight font-medium text-black">$90</span>


                    </div>
                </div>
                <div class="bg-gray-100 border border-gray-100 hover:border-gray-300 cursor-pointer p-4 rounded ">
                    <div class="uppercase tracking-wide text-sm text-gray-500 font-semibold">Aire acondicionado split
                        36,000 BTU</div>

                    <div class="mt-4">
                        <span class="block mt-1 text-lg leading-tight font-medium text-black">$100</span>


                    </div>
                </div>
            </div>

        </div>
        <div>
            <label for="" class="block text-sm uppercase font-black text-gray-500">Selecciona las unidad/es</label>
            <div class="flex flex-row gap-4">
                <div class="w-12 h-12 text-center py-3 bg-gray-100 rounded-full cursor-pointer border border-gray-300">1
                </div>
                <div
                    class="w-12 h-12 text-center py-3 bg-gray-100 rounded-full cursor-pointer border border-gray-100 hover:border-gray-300">
                    2</div>
                <div
                    class="w-12 h-12 text-center py-3 bg-gray-100 rounded-full cursor-pointer border border-gray-100 hover:border-gray-300">
                    3</div>
                <div
                    class="w-12 h-12 text-center py-3 bg-gray-100 rounded-full cursor-pointer border border-gray-100 hover:border-gray-300">
                    4</div>

            </div>
        </div>
        <div class="pb-16">
            <button class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-full">Anadir a la orden</button>

        </div>
    </section>
</x-customers.app-layout>