<div
x-data="{ modelOpen: false }">
  <button
    class="mt-4 mb-2 ml-auto flex transform items-center justify-center space-x-2 rounded-md bg-indigo-500 px-3 py-2 text-sm capitalize tracking-wide text-white transition-colors duration-200 hover:bg-indigo-600 focus:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-50 dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700"
    @click="modelOpen =!modelOpen">
    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
        clip-rule="evenodd" />
    </svg>
    {{-- Dynamically Pull in button title --}}
    {{-- add title="" in <x-ticket-modal> --}}
    <span>{{ $title }}</span>
  </button>

  <div class="fixed inset-0 z-50 overflow-y-auto" x-show="modelOpen" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="flex min-h-screen items-end justify-center px-4 text-center sm:block sm:p-0 md:items-center">
      <div class="fixed inset-0 bg-gray-500 bg-opacity-40 transition-opacity" x-cloak @click="modelOpen = false"
        x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" aria-hidden="true"></div>

      <div
        class="my-10 inline-block w-1/2 transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all"
        x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
        <div class="flex justify-end">
          {{-- Dynamically Pull in modal data --}}
          {{-- Wrap data in <x-ticket-modal> --}}
          {{ $slot }}
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
