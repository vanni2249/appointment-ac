<div class="w-full fixed p-4 bg-blue-100">
    <div class="container mx-auto flex items-center justify-between">
        <div>
            <a href="{{ route('customers.index') }}" class="text-blue-500 font-extrabold">Logo</a>
        </div>
        <div class="space-x-6">
            {{-- Mobile --}}
            <div x-data="{ open: false }" class="md:hidden flex flex-row items-center space-x-8">
                @auth
                <a href="{{ route('customers.cart') }}" class="block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>


                </a>

                @endauth
                <button x-on:click="open = !open" class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </button>
                <div x-show="open" x-on:click.away="open = false"
                    class="bg-white p-4 absolute right-0 top-10 border rounded shadow-xl w-52">
                    @guest
                    <ul class="text-sm space-x-4 flex flex-row">
                        <li>
                            <a href="{{ route('register') }}"
                                class="bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded-full text-white text-sm">Sing
                                up</a>

                        </li>
                        <li>
                            <a href="{{ route('login') }}"
                                class="text-sm hover:bg-blue-300 border border-blue-300 py-2 px-4 rounded-full">Log
                                in</a>

                        </li>
                    </ul>

                    @endguest
                    @auth
                    <ul class="text-sm space-y-4">
                        <li>
                            <a href="{{ route('customers.orders.index') }}">Ordenes</a>
                        </li>
                        <li>
                            <a href="{{ route('customers.locations.index') }}">Dirrecciones</a>
                        </li>
                        <li>
                            <a href="{{ route('customers.profile') }}">Perfil</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Cerrar session</a>
                            </form>
                        </li>
                    </ul>

                    @endauth
                </div>
            </div>
            {{-- Desktop --}}
            <div x-data="{ open: false }" class="hidden  md:flex items-center space-x-2">
                @guest
                <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded-full text-white text-sm">Sing up</a>
                <a href="{{ route('login') }}" class="text-sm hover:bg-blue-300 border border-blue-300 py-2 px-4 rounded-full">Log
                    in</a>

                @endguest
                @auth
                <a href="{{ route('customers.cart') }}"
                    class="bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded-full text-white text-sm flex flex-row space-x-2 items-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                        </svg>

                    </span>
                    <span>Orden en proceso</span>
                </a>
                <div class="relative">
                    <span x-on:click="open = !open"
                        class="border border-blue-300 px-4 py-2 rounded-full cursor-pointer hover:bg-blue-300">Mi
                        cuenta</span>
                    <div x-show="open" x-on:click.away="open = false"
                        class="bg-white p-4 absolute right-0 border rounded shadow-xl w-52 top-8">
                        <ul class="text-sm space-y-4 ">

                            <li class="hover:text-blue-800">
                                <a href="{{ route('customers.orders.index') }}">Ordenes</a>
                            </li>
                            <li>
                                <a href="{{ route('customers.locations.index') }}">Dirrecciones</a>
                            </li>
                            <li class="hover:text-blue-800">
                                <a href="{{ route('customers.profile') }}">Perfil</a>
                            </li>
                            <li class="hover:text-blue-800">
                                {{-- Cerrar session --}}
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">Cerrar session</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                @endauth
            </div>
        </div>

    </div>
</div>