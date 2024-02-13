<div
x-data="{ modelOpen: false }">
  <button
    class="transform text-rp-500 text-sm transition-colors duration-200 hover:text-rp-900"
    @click="modelOpen =!modelOpen">
    {{-- Dynamically Pull in button title --}}
    {{-- add title="" in <x-ticket-modal> --}}
    <span>Update</span>
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
