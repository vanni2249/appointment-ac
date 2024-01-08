<x-customers.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                {{ __('Dirrecciones') }}
            </h2>
        </div>
    </x-slot>
    <section class="container mx-auto">
        <div class="mb-4">
            <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 text-white rounded-full">Anadir nueva
                dirreccion</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            <div class="rounded p-4 bg-gray-200 flex flex-col">
                <div class="flex-grow p-4 rounded bg-white">
                    <div class="flex justify-between">
                        <h2 class="font-bold">Mi negocio</h2>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                            </svg>

                        </button>
                    </div>
                    <ul class="mt-2 text-gray-600 text-sm">
                        <li>Urb. Villas del Prado</li>
                        <li>Calle del Sol 125</li>
                        <li>Juana Diaz PR 00795</li>
                    </ul>
                </div>
            </div>
            <div class="rounded p-4 bg-gray-200 flex flex-col">
                <div class="flex-grow p-4 rounded bg-white">
                    <div class="flex justify-between">
                        <h2 class="font-bold">Mi hogar</h2>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                            </svg>

                        </button>
                    </div>
                    <ul class="mt-2 text-gray-600 text-sm">
                        <li>Urb. Villas del Prado</li>
                        <li>Calle del Sol 125</li>
                        <li>Juana Diaz PR 00795</li>
                    </ul>
                </div>
            </div>
            <div class="rounded p-4 bg-gray-200 flex flex-col">
                <div class="flex-grow p-4 rounded bg-white">
                    <div class="flex justify-between">
                        <h2 class="font-bold">Casa de playa</h2>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                            </svg>

                        </button>
                    </div>
                    <ul class="mt-2 text-gray-600 text-sm">
                        <li>Urb. Villas del Prado</li>
                        <li>Calle del Sol 125</li>
                        <li>Juana Diaz PR 00795</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
</x-customers.app-layout>