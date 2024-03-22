<div class="flex flex-col gap-4">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            {{ __("Welcome, ". auth()->user()->name) }}
        </div>
    </div>
    <div class="grid grid-cols-4 gap-4">
        <div class="flex flex-col gap-2 justify-center items-center bg-white rounded-lg p-4">
            <h2>Urgent</h2>
            <h3 class="text-4xl">{{$urgent->count()}}</h3>
            <p></p>
        </div>
        <div class="flex flex-col gap-2 justify-center items-center bg-white rounded-lg p-4">
            <h2>New</h2>
            <h3 class="text-4xl">{{ $new->count() }}</h3>
        </div>
        <div class="flex flex-col gap-2 justify-center items-center bg-white rounded-lg p-4">
            <h2>Pending</h2>
            <h3 class="text-4xl">{{ $pending->count() }}</h3>
        </div>
        <div class="flex flex-col gap-2 justify-center items-center bg-white rounded-lg p-4">
            <h2>Stale</h2>
            <h3 class="text-4xl">{{ $unresolved->count() }}</h3>
        </div>
    </div>
    @if(!$urgent->isEmpty())
    <div x-data="{ expanded: false }" class="bg-white p-4 rounded-lg">
        <div class="flex justify-between gap-4">
            <h3>
                Urgent
            </h3>
            <button @click="expanded = ! expanded" class="font-medium text-rp-500 hover:text-rp-700 duration-300 transition-all">View All <i class="fa-solid fa-chevron-up transition-all duration-300" :class="expanded ? '' : 'rotate-180'"></i></button>
        </div>
        <div x-show="expanded" x-collapse>
            <livewire:admin.dashboard-shortcuts :tickets="$urgent" />
        </div>
    </div>
    @endif @if(!$new->isEmpty())
    <div x-data="{ expanded: false }" class="bg-white p-4 rounded-lg">
        <div class="flex justify-between gap-4">
            <h3>
                New
            </h3>
            <button @click="expanded = ! expanded" class="font-medium text-rp-500 hover:text-rp-700 duration-300 transition-all">View All <i class="fa-solid fa-chevron-up transition-all duration-300" :class="expanded ? '' : 'rotate-180'"></i></button>
        </div>
        <div x-show="expanded" x-collapse>
            <livewire:admin.dashboard-shortcuts :tickets="$new" />
        </div>
    </div>
    @endif @if(!$pending->isEmpty())
    <div x-data="{ expanded: false }" class="bg-white p-4 rounded-lg">
        <div class="flex justify-between gap-4 ">
            <h3>
                Pending
            </h3>
            <button @click="expanded = ! expanded" class="font-medium text-rp-500 hover:text-rp-700 duration-300 transition-all">View All <i class="fa-solid fa-chevron-up transition-all duration-300" :class="expanded ? '' : 'rotate-180'"></i></button>

        </div>
        <div x-show="expanded" x-collapse>
            <livewire:admin.dashboard-shortcuts :tickets="$pending" />
        </div>
    </div>
    @endif @if(!$unresolved->isEmpty())
    <div x-data="{ expanded: false }" class="bg-white p-4 rounded-lg">
        <div class="flex justify-between gap-4">
            <h3>
                Stale
            </h3>
            <button @click="expanded = ! expanded" class="font-medium text-rp-500 hover:text-rp-700 duration-300 transition-all">View All <i class="fa-solid fa-chevron-up transition-all duration-300" :class="expanded ? '' : 'rotate-180'"></i></button>
        </div>
        <div x-show="expanded" x-collapse>
            <livewire:admin.dashboard-shortcuts :tickets="$unresolved" />
        </div>
    </div>
    @endif
</div>
