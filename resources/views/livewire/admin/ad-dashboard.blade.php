  <div class="flex flex-col gap-4">
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900">
        {{ __('Welcome, ' . auth()->user()->name) }}
      </div>
    </div>
    <div class="grid grid-cols-4 gap-4">
      <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-white p-4">
        <h2>Urgent</h2>
        <h3 class="text-4xl">{{ !empty($urgent) ? $urgent->count() : 0 }}</h3>
        <p></p>
      </div>
      <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-white p-4">
        <h2>New</h2>
        <h3 class="text-4xl">{{ $new->count() }}</h3>
      </div>
      <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-white p-4">
        <h2>Pending</h2>
        <h3 class="text-4xl">{{ !empty($pending) ? $pending->count() : 0 }}</h3>
      </div>
      <div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-white p-4">
        <h2>Stale</h2>
        <h3 class="text-4xl">{{ !empty($unresolved) ? $unresolved->count() : 0 }}</h3>
      </div>
    </div>
    @if (!empty($urgent))
      <div x-data="{ expanded: false }" class="rounded-lg bg-white p-4">
        <div class="flex justify-between gap-4">
          <h3>
            Urgent
          </h3>
          <button @click="expanded = ! expanded"
            class="font-medium text-rp-500 transition-all duration-300 hover:text-rp-700">View All <i
              class="fa-solid fa-chevron-up transition-all duration-300"
              :class="expanded ? '' : 'rotate-180'"></i></button>
        </div>
        <div x-show="expanded" x-collapse>
          <livewire:admin.dashboard-shortcuts :tickets="$urgent" />
        </div>
      </div>
      @endif @if (!empty($new))
        <div x-data="{ expanded: false }" class="rounded-lg bg-white p-4">
          <div class="flex justify-between gap-4">
            <h3>
              New
            </h3>
            <button @click="expanded = ! expanded"
              class="font-medium text-rp-500 transition-all duration-300 hover:text-rp-700">View All <i
                class="fa-solid fa-chevron-up transition-all duration-300"
                :class="expanded ? '' : 'rotate-180'"></i></button>
          </div>
          <div x-show="expanded" x-collapse>
            <livewire:admin.dashboard-shortcuts :tickets="$new" />
          </div>
        </div>
        @endif @if (!empty($pending))
          <div x-data="{ expanded: false }" class="rounded-lg bg-white p-4">
            <div class="flex justify-between gap-4">
              <h3>
                Pending
              </h3>
              <button @click="expanded = ! expanded"
                class="font-medium text-rp-500 transition-all duration-300 hover:text-rp-700">View All <i
                  class="fa-solid fa-chevron-up transition-all duration-300"
                  :class="expanded ? '' : 'rotate-180'"></i></button>

            </div>
            <div x-show="expanded" x-collapse>
              <livewire:admin.dashboard-shortcuts :tickets="$pending" />
            </div>
          </div>
          @endif @if (!empty($unresolved))
            <div x-data="{ expanded: false }" class="rounded-lg bg-white p-4">
              <div class="flex justify-between gap-4">
                <h3>
                  Stale
                </h3>
                <button @click="expanded = ! expanded"
                  class="font-medium text-rp-500 transition-all duration-300 hover:text-rp-700">View All <i
                    class="fa-solid fa-chevron-up transition-all duration-300"
                    :class="expanded ? '' : 'rotate-180'"></i></button>
              </div>
              <div x-show="expanded" x-collapse>
                <livewire:admin.dashboard-shortcuts :tickets="$unresolved" />
              </div>
            </div>
          @endif
  </div>
