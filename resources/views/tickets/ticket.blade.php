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
          <x-ticket-btn :href="route('ticket.create')" :btn="true">
            {{ __("New") }}
          </x-ticket-btn>
        </div>
        <div class="mb-6 mx-6">
          <div class=" bg-purple-400 rounded-lg px-6 uppercase mb-2 py-2 flex justify-between gap-4 text-gray-900">
            <span class="">Topic</span>
            <span class="">Building</span>
            <span class="">Priority</span>
            <span class="">Detail</span>
            <span class="">Status</span>
          </div>
          @foreach (auth()->user()->get_tickets() as $ticket)
          <div class=" bg-purple-400 rounded-lg p-6 flex gap-4 text-gray-900 justify-between">
            <span>
              {{ $ticket->topic }}
            </span>
            <span>
              {{ $ticket->priority }}
            </span>
            <span>
              {{ $ticket->building }}
            </span>
            <span>
              {{ $ticket->details }}
            </span>
            <span>
              {{ $ticket->status }}
            </span>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  </div>
  </div>


</x-app-layout>