<x-app-layout>
    <x-slot name="header">

        <div class="flex items-center px-1">
            <h2 class="font-semibold text-xl  leading-tight flex-1">
                {{ __('Liste des réservations') }}
            </h2>
            <div class="tooltip" data-tip="Créer">
                <a href="{{ route('bookings.create') }}" class="btn btn-md btn-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>

                </a>
            </div>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 px-1 lg:px-8 space-y-6">

        @forelse($bookings as $booking)
            <div
                class="flex items-center p-2 mt-2 bg-base-100 border border-base-200 rounded-lg shadow hover:border-base-300 ">
                <div class="font-semibold flex-1">{{ $booking->id }}</div>

                <div class="tooltip" data-tip="Supprimer">
                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST"
                        onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette réservation ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-error">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path
                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                </path>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="w-2"></div>
                <div class="tooltip" data-tip="Modifier">
                    <a href="{{ route('bookings.edit', $actionPlan->id) }}" class="btn base-content ">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </a>
                </div>

            </div>
        @empty
            <p class="pt-10 text-center">Aucune reservation trouvé.</p>
        @endforelse

    </div>
</x-app-layout>
