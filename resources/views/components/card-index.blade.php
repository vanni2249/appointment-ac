<section class="container mx-auto pb-8">
    <div class="bg-gray-200 shadow rounded-lg p-4">
        <header class="py-2 space-y-1">
            <h2 class="text-md">
                {{$title}}
            </h2>
            <menu>
                @isset($menu)
                {{$menu}}
                @endisset
            </menu>
        </header>
        <section class="space-y-2">
            {{$items}}
        </section>

</section>
</div>