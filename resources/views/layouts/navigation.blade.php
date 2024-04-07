<div class="flex justify-between h-full w-full flex-col gap-2 bg-ob-900 py-4 text-ob-100">
    <div class="flex flex-col gap-2">

        <x-application-logo class="block my-4 h-9 w-auto fill-current text-ob-100" />

        <x-nav-categorie>
            Main Actions
        </x-nav-categorie>
        <div class="relative">
            <x-nav-side-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                <div
                    class="absolute left-0 h-4/5 w-1 rounded-r-lg bg-ob-900 transition-all duration-200 group-hover:bg-rp-500 group-[.active-group]:bg-rp-500">
                </div>
                <x-nav-icon>
                    fa-regular fa-objects-column
                </x-nav-icon>
                <x-nav-inner-links>
                    {{ __('Dashboard') }}
                </x-nav-inner-links>
            </x-nav-side-link>
        </div>

        <div class="relative">
            <x-nav-side-link :href="route('tickets.index')" :active="request()->routeIs('tickets.index')">
                <x-nav-icon>
                    fa-regular fa-ticket
                </x-nav-icon>
                <x-nav-inner-links>
                    {{ __('My Tickets') }}
                </x-nav-inner-links>
            </x-nav-side-link>
        </div>
    </div>


    <div class="flex flex-col gap-2">

        <x-nav-categorie class="">
            {{auth()->user()->name}}
        </x-nav-categorie>
        <div class="relative">
            <x-nav-side-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                <x-nav-icon>
                    fa-regular fa-user
                </x-nav-icon>
                <x-nav-inner-links>
                    {{ __('My Account') }}
                </x-nav-inner-links>
            </x-nav-side-link>
        </div>
        <form class="relative" method="POST" action="{{ route('logout') }}">
            @csrf

            <x-nav-side-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                <div
                    class="absolute left-0 h-4/5 w-1 rounded-r-lg bg-ob-900 transition-all duration-200 group-hover:bg-rp-500 group-[.active-group]:bg-rp-500">
                </div>
                <x-nav-icon>
                    fa-solid fa-arrow-right-from-bracket
                </x-nav-icon>
                <x-nav-inner-links>
                    {{ __('Logout') }}
                </x-nav-inner-links>
            </x-nav-side-link>
        </form>
    </div>
</div>
