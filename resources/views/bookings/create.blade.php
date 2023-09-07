<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Réservation') }}
        </h2>
    </x-slot>

    <form class="max-w-7xl mx-auto sm:px-6 px-1 lg:px-8 space-y-6" method="POST" action="{{ route('bookings.store') }}">
        @csrf

        <x-filament::input.wrapper>
            <x-filament::input type="text" wire:model="name" />
        </x-filament::input.wrapper>


        <x-button>{{ __('Sauvegarder') }}</x-button>
    </form>




</x-app-layout>
