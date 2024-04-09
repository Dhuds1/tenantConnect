<x-app-layout>
      <div class="flex flex-col gap-4">
        <div class="bg-white p-6 py-10 text-gray-900 shadow-lg sm:rounded-lg">
          {{ __('Welcome, ' . auth()->user()->name) }}
        </div>
        <div class="grid grid-cols-4 gap-4">
          <div class="flex flex-col gap-2 justify-center items-center bg-white rounded-lg p-4">
            <h2>Open</h2>
            <h3 class="text-4xl">{{ auth()->user()->get_open_count() }}</h3>
          </div>
          <div class="flex flex-col gap-2 justify-center items-center bg-white rounded-lg p-4">
            <h2>Under Review</h2>
            <h3 class="text-4xl">{{ auth()->user()->get_review_count() }}</h3>
          </div>
          <div class="flex flex-col gap-2 justify-center items-center bg-white rounded-lg p-4">
            <h2>Closed</h2>
            <h3 class="text-4xl">{{ auth()->user()->get_close_count() }}</h3>
          </div>
          <div class="flex flex-col gap-2 justify-center items-center bg-white rounded-lg p-4">
            <h2>Pending</h2>
            <h3 class="text-4xl">{{ auth()->user()->get_archive_count() }}</h3>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
