<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Roles') }}
            </h2>
            <x-sidebar-form title="crear role" type='btn'>
                <livewire:admin.create-role>
            </x-sidebar-form>
        </div>
    </x-slot>
    <section class="container mx-auto pb-8">
        <x-card-index>
            <x-slot:title>
                2 de 2 total 2
            </x-slot:title>
            <x-slot:menu>
                {{-- <input type="text" name="" id="" class="rounded-full"> --}}
            </x-slot:menu>
            <x-slot:items>
                <div class="bg-white p-4 rounded">

                    <div class="flex flex-col">
                        <div class="flex flex-row justify-between text-sm items-center">
                            <span class="font-bold w-32">Admin</span>
                            <ul class="hidden grow md:flex flex-row flex-wrap gap-2 text-xs ">
                                <li
                                    class="bg-gray-100 text-gray-500 font-semibold rounded-lg p-1 line-clamp-1 whitespace-nowrap">
                                    Geovanni Colon</li>
                                <li
                                    class="bg-gray-100 text-gray-500 font-semibold rounded-lg p-1 line-clamp-1 whitespace-nowrap">
                                    Kariani A Colon</li>
                                <li
                                    class="bg-gray-100 text-gray-500 font-semibold rounded-lg p-1 line-clamp-1 whitespace-nowrap">
                                    Angel F Colon</li>
                            </ul>
                            <span>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                </a>
                            </span>
                        </div>

                    </div>
                </div>
                <div class="bg-white p-4 rounded">

                    <div class="flex flex-col">
                        <div class="flex flex-row justify-between text-sm items-center">
                            <span class="font-bold w-32">Tech</span>
                            <ul class="hidden grow md:flex flex-row flex-wrap gap-2 text-xs ">
                                <li
                                    class="bg-gray-100 text-gray-500 font-semibold rounded-lg p-1 line-clamp-1 whitespace-nowrap">
                                    Geovanni Colon</li>
                                <li
                                    class="bg-gray-100 text-gray-500 font-semibold rounded-lg p-1 line-clamp-1 whitespace-nowrap">
                                    Kariani A Colon</li>
                                <li
                                    class="bg-gray-100 text-gray-500 font-semibold rounded-lg p-1 line-clamp-1 whitespace-nowrap">
                                    Angel F Colon</li>
                            </ul>
                            <span>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                </a>
                            </span>
                        </div>

                    </div>
                </div>

            </x-slot:items>
        </x-card-index>

    </section>

</x-admin.app-layout>