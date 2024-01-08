<div class="w-full fixed p-4 bg-blue-100">
    <div class="container mx-auto flex items-center justify-between">
        <div>
            <a href="/admin" class="text-blue-500 font-extrabold">Logo</a>
        </div>
        <div class="space-x-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button @click="$dispatch('open-dropdown',{id})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('admin.orders.index')">
                        {{ __('Ordenes') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.transactions.index')">
                        {{ __('Transacciones') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.works.index')">
                        {{ __('Trabajos') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.users.index')">
                        {{ __('Usuarios') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.cities.index')">
                        {{ __('Ciudades') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.locations.index')">
                        {{ __('Dirrecciones') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.categories.index')">
                        {{ __('Categorias') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.products.index')">
                        {{ __('Productos') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.services.index')">
                        {{ __('Servicios') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.roles.index')">
                        {{ __('Roles') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.profile')">
                        {{ __('Perfil') }}
                    </x-dropdown-link>
                    <x-dropdown-list>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">Cerrar session</a>
                        </form>
                    </x-dropdown-list>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</div>