<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-bold leading-tight text-white">
            {{ __('My Account') }}
        </h2>
    </x-slot>

    <div class="wrapper bg-custom p-6 rounded-lg">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        <div class="bg-custom">
            @livewire('profile.update-profile-information-form')
        </div>
        <x-jet-section-border />
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <div class="mt-10 sm:mt-0">
            @livewire('profile.update-password-form')
        </div>

        <x-jet-section-border />
        @endif

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
        <div class="mt-10 sm:mt-0">
            @livewire('profile.two-factor-authentication-form')
        </div>

        <x-jet-section-border />
        @endif

        <div class="mt-10 sm:mt-0">
            @livewire('profile.logout-other-browser-sessions-form')
        </div>

        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
        <x-jet-section-border />

        <div class="mt-10 sm:mt-0">
            @livewire('profile.delete-user-form')
        </div>
        @endif
    </div>
</x-app-layout>
