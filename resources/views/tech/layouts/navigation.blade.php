<div class="w-full fixed p-4 bg-blue-100">
    <div class="container mx-auto flex items-center justify-between">
        <div>
            <a href="/tech" class="text-blue-500 font-extrabold">Logo Tech</a>
        </div>
        <div class="space-x-6">
            {{-- Mobile --}}
            <div x-data="{ open: false }" class="flex flex-row items-center space-x-8 relative">
                <button x-on:click="open = !open" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </button>
                <div x-show="open" x-on:click.away="open = false"
                    class="bg-white p-4 absolute right-0 top-8 border rounded shadow-xl w-52">
                    <ul class="text-sm space-y-4">

                        <li>
                            <a href="{{ route('tech.works.index') }}">Trabajos</a>
                        </li>
                        <li>
                            <a href="{{ route('tech.invoices.index') }}">Invoices</a>
                        </li>
                        <li>
                            <a href="{{ route('tech.profile') }}">Perfil</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Cerrar session</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
           
        </div>

    </div>
</div>