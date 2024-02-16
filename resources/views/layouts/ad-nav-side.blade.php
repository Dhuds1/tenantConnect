<nav class="w-[260px]bg-red-200 rounded-lg sticky top-0">
    <div class="min-w-[260px] h-[100dvh] bg-ob-900 py-4 flex flex-col  gap-2 text-ob-100">
        <x-application-logo class="block h-9 w-auto fill-current text-ob-100" />

        <h3 class="text-xs ml-[10%]">Main Actions</h3>
        <div class="relative">
            <x-nav-side-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                <div
                    class="group-hover:bg-rp-500 group-[.active-group]:bg-rp-500 bg-ob-900 w-1 h-full rounded-r-lg absolute left-0 transition-all duration-200">
                </div>
                <span class="w-5 h-5 bg-rp-200 inline-block"></span>
                <span>
                    {{ __('Dashboard') }}
                </span>
            </x-nav-side-link>
        </div>

        <div class="relative">
            <x-nav-side-link :href="route('ad.ticket.index')" :active="request()->routeIs('ad.ticket.index')">
                <div
                    class="group-hover:bg-rp-500 group-[.active-group]:bg-rp-500 bg-ob-900 w-1 h-full rounded-r-lg absolute left-0 transition-all duration-200">
                </div>
                <span class="w-5 h-5 bg-rp-200 inline-block"></span>
                <span>
                    {{ __('Tickets Center') }}
                </span>
            </x-nav-side-link>
        </div>
        <h3 class="mt-auto text-xs ml-[10%]">User</h3>
        <div class="relative">
            <x-nav-side-link :href="route('ad.ticket.index')" :active="request()->routeIs('ad.ticket.index')">
                <div
                    class="group-hover:bg-rp-500 group-[.active-group]:bg-rp-500 bg-ob-900 w-1 h-full rounded-r-lg absolute left-0 transition-all duration-200">
                </div>
                <span class="w-5 h-5 bg-rp-200 inline-block"></span>
                <span>
                    {{ __('Account') }}
                </span>
            </x-nav-side-link>
        </div>
        <div class="relative">
            <x-nav-side-link :href="route('ad.ticket.index')" :active="request()->routeIs('ad.ticket.index')">
                <div
                    class="group-hover:bg-rp-500 group-[.active-group]:bg-rp-500 bg-ob-900 w-1 h-full rounded-r-lg absolute left-0 transition-all duration-200">
                </div>
                <span class="w-5 h-5 bg-rp-200 inline-block"></span>
                <span>
                    {{ __('Logout') }}
                </span>
            </x-nav-side-link>
        </div>
    </div>
</nav>
