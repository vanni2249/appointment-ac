<x-customers.app-layout>
    <x-slot name="header">
        <div class="flex flex-col space-y-4">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Perfile') }}
            </h2>
        </div>
    </x-slot>
    <section class="container mx-auto space-y-4">
        <div class="grid grid-cols-2 md:grid-cols-6">
            <div class="col-span-2 md:col-span-2">
                <div class="bg-gray-200 p-4 md:p-6 rounded-l shadow h-full">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Profile Information') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("Update your account's profile information and email address.") }}
                    </p>
                </div>
            </div>
            <div class="col-span-2 md:col-span-4">
                <div class="bg-gray-100 p-4 md:p-6 rounded-r h-full">
                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>
                    <form action="">
                        @csrf
                        @method('put')
                        @include('partials.profile.update-profile-information-form')
                    </form>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-6">
            <div class="col-span-2 md:col-span-2">
                <div class="bg-gray-200 p-4 md:p-6 rounded-l shadow h-full">
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Update Password') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Ensure your account is using a long, random password to stay secure.') }}
                    </p>
                </div>
            </div>
            <div class="col-span-2 md:col-span-4">
                <div class="bg-gray-100 p-4 md:p-6 rounded-r h-full">
                    <form action="">
                        @csrf
                        @method('put')
                        @include('partials.profile.update-password-form')
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-customers.app-layout>