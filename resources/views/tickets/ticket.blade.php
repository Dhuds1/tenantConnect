<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Ticket Center') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 flex gap-4 text-gray-900">
          <x-ticket-btn>
            {{ __("Active") }}
          </x-ticket-btn>
          <x-ticket-btn>
            {{ __("Closed") }}
          </x-ticket-btn>
          <x-ticket-btn :href="route('tickets.create')" :btn="true">
            {{ __("New") }}
          </x-ticket-btn>
        </div>
        @foreach ($tickets as $ticket)
            {{ $ticket->details }}
            <br>
        @endforeach
        </div>
      </div>
    </div>
  </div>


</x-app-layout>