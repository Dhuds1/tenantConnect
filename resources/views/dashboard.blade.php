<x-app-layout>
  <div class="">
    <div class="mx-auto max-w-7xl">
      <div class="flex flex-col gap-4">
        <div class="bg-white p-6 py-10 text-gray-900 shadow-lg sm:rounded-lg">
          {{ __('Welcome, ' . auth()->user()->name) }}
        </div>
        <div class="bg-white p-6 py-10 text-gray-900 shadow-lg sm:rounded-lg">
          {{ __('Tickets Active, ' . auth()->user()->get_open_count()) }}

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
