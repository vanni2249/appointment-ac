<x-tech.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Trabajo') }}
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
            <div class="bg-white p-4 rounded col-span-12 md:col-span-6">
                <h2>Fecha del trabajo</h2>
                <ul class="mt-2 text-gray-500 text-sm">
                    <li>28/2/2022</li>
                </ul>
            </div>
            
            <div class="bg-white p-4 rounded col-span-12 md:col-span-6">
                <h2>Locacion</h2>
                <ul class="mt-2 text-gray-500 text-sm">
                    <li>Urbanizacion Villas del prado</li>
                    <li>Calle del Sol 125</li>
                    <li>Juana Diaz PR 00795</li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded col-span-12 lg:col-span-8 space-y-2">
                <div class="bg-gray-100 p-4 rounded">
                    <h2>Mantenimiento</h2>
                    <ul class="my-2 text-gray-500 text-sm">
                        <li class="line-clamp-1">
                            Aire acondicionado mini split 12,000 btu
                        </li>
                        <li class="flex justify-between ml-6">
                            <span>$50.00 x 1</span>
                            <span>$50.00</span>
                        </li>
                    </ul>
                    <h2>Mantenimiento</h2>
                    <ul class="my-2 text-gray-500 text-sm">
                        <li class="line-clamp-1">
                            Aire acondicionado mini split 18,000 btu
                        </li>
                        <li class="flex justify-between ml-6">
                            <span>$75.00 x 1</span>
                            <span>$75.00</span>
                        </li>
                    </ul>
                    
                </div>
               
            </div>
            <div class="bg-white p-4 rounded col-span-12 lg:col-span-4">
                <h2>Balance</h2>
                <ul class="my-2 text-gray-500 text-sm">
                    <li class="flex justify-between pb-4">
                        <span>Sub total:</span>
                        <span>$125.00</span>
                    </li>
                    <li class="flex justify-between py-4">
                        <span>Total:</span>
                        <span>$125.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Pago:</span>
                        <span>$125.00</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Balance:</span>
                        <span>$0.00</span>
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
  
</x-tech.app-layout>