<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Ajustes') }}
            </h2>
        </div>
    </x-slot>
    <section class="container mx-auto space-y-4">
        <div class="grid grid-cols-2 md:grid-cols-6 shadow">
            <div class="col-span-2 md:col-span-2">
                <div class="bg-gray-100 p-4 md:p-6 rounded-l h-full">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Roles') }}
                    </h2>
            
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("Crear, actualiza y elimina roles.") }}
                    </p>
                </div>
            </div>
            <div class="col-span-2 md:col-span-4 bg-gray-50">
                <ul class="p-4 flex  text-sm">
                    <li class="bg-gray-100 py-1 px-4 m-1 rounded-full">User</li>
                    <li class="bg-gray-100 py-1 px-4 m-1 rounded-full">Admin</li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-6 shadow">
            <div class="col-span-2 md:col-span-2">
                <div class="bg-gray-100 p-4 md:p-6 rounded-l h-full">
                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('Permisos') }}
                    </h2>
            
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("Crear, actualiza y elimina permisos.") }}
                    </p>
                </div>
            </div>
            <div class="col-span-2 md:col-span-4 bg-gray-50">
                <ul class="p-4 flex  text-sm">
                    <li class="bg-gray-100 py-1 px-4 m-1 rounded-full">crear-usuario</li>
                    <li class="bg-gray-100 py-1 px-4 m-1 rounded-full">actualizar-usuario</li>
                </ul>
            </div>
        </div>
       
    </section>
</x-admin.app-layout>