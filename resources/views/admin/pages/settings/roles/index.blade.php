<x-admin.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Roles y permisos') }}
            </h2>
        </div>
    </x-slot>
    <section class="container mx-auto">

        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-4 lg:col-span-4 space-y-4">

                <div class="col-span-4 lg:col-span-3">
                    <div class="bg-gray-100 shadow rounded-lg p-4">
                        <header class="flex flex-row items-center p-2">
                            <ul class="flex gap-2">
                                <li class="w-32">Roles</li>
                                <li class="grow">Permisos</li>
                            </ul>
                        </header>
                        <ul class="text-sm space-y-2">
                            <li class="bg-white p-2 rounded flex flex-row items-center">
                                <div class="w-32">Admin</div>
                                <div class="grow">
                                    <ul class="flex flex-row flex-wrap gap-2">
                                        <li class="bg-gray-100 text-gray-500 rounded-lg whitespace-nowrap p-1 m-1 text-xs ">
                                            create-roles
                                        </li>
                                        <li class="bg-gray-100 text-gray-500 rounded-lg whitespace-nowrap p-1 m-1 text-xs ">
                                            edit-roles
                                        </li>
                                        <li class="bg-gray-100 text-gray-500 rounded-lg whitespace-nowrap p-1 m-1 text-xs ">
                                            edit-roles
                                        </li>
                                        <li class="bg-gray-100 text-gray-500 rounded-lg whitespace-nowrap p-1 m-1 text-xs ">
                                            create-roles
                                        </li>
                                        <li class="bg-gray-100 text-gray-500 rounded-lg whitespace-nowrap p-1 m-1 text-xs ">
                                            edit-roles
                                        </li>
                                        <li class="bg-gray-100 text-gray-500 rounded-lg whitespace-nowrap p-1 m-1 text-xs ">
                                            edit-roles
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bg-white p-2 rounded">User</li>
                        </ul>
                        {{-- <section class="space-y-2">
                            <div class="block rounded bg-white">
                                <div class="p-4 ">
                                    <div class="grid grid-cols-2 sm:grid-cols-5 sm:items-center text-sm">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">
                                                487634323
                                            </span>
                                            <span class="text-xs font-medium text-gray-500">
                                                03/13/2023
                                            </span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-semibold">
                                                Mantenimieno
                                            </span>
                                            <span class="text-xs font-medium text-gray-500">
                                                4 unidades
                                            </span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-semibold">
                                                Juana Diaz
                                            </span>
                                            <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                                Urb. Villas del Prado
                                            </span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-semibold">
                                                Vie. 12/21/23
                                            </span>
                                            <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                                Tarde
                                            </span>
                                        </div>
                                        <div class="flex flex-col">
                                            <span class="font-semibold">
                                                Geovanni Colon

                                            </span>
                                            <span class="text-xs font-medium text-gray-500 line-clamp-1">
                                                En proceso
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> --}}

                    </div>

                </div>
            </div>



            {{-- <div class="bg-gray-100"></div>
            <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
                <div class="rounded shadow">

                </div>
            </div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Role
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Permissions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            Admin
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Can add, edit and delete users, and modify their roles and permissions
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            User
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            Can view and edit their own profile information, but cannot modify other users' information
                            or roles and permissions
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table> --}}
    </section>
</x-admin.app-layout>