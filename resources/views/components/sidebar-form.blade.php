@props(['title' => 'info', 'type' => ''])
<div x-data="{ open: false }">
    @if ($type === 'btn')
    <button x-on:click="open = !open"
        class="border text-gray-700 rounded px-4 py-2 text-xs font-bold uppercase">{{$title}}</button>
    @endif

    @if ($type === 'text')
    <span x-on:click="open = !open">{{$title}}</span>

    @endif
    <div x-show="open" x-on:click.away="open = false" @open-dropdown.window="if ($event.detail.id == 1) open = true">
        <div class="fixed z-10 top-0 left-0 bg-black opacity-40 w-full h-screen"></div>
        <div class="fixed z-10 top-0 right-0 w-full sm:w-96 shadow h-screen bg-white opacity-100 p-4">
            <div class="flex flex-col space-y-6">
                <header class="flex flex-row items-center justify-between">
                    <h1 class="capitalize text-sm font-black">{{$title}}</h1>
                    <button x-on:click="open = !open">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </header>
                <section>
                    {{$slot}}
                </section>
            </div>
        </div>
    </div>
</div>