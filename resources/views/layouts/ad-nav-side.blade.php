<div class="w-1/4 bg-ob-500 rounded-lg mt-4 py-4">
    <div class="w-full flex flex-col  gap-4">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
        <x-nav-side-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
            <span class="w-5 h-5 bg-rp-200 inline-block"></span>
            <span>
                {{ __('Admin') }}
            </span>
        </x-nav-side-link>
        <x-nav-side-link :href="route('ad.ticket.index')" :active="request()->routeIs('ad.ticket.index')">
            <span class="w-5 h-5 bg-rp-200 inline-block"></span>
            <span>
                {{ __('Tickets Center') }}
            </span>
        </x-nav-side-link>
    </div>
</div>
