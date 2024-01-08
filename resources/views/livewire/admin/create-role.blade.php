<div>
    <form action="" class="space-y-2">
        @csrf
        @method('patch')
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', 'Admin')" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />

        </div>
        <div>
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>
        </div>
    </form>
</div>
