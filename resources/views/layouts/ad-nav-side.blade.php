<div class="flex h-full min-w-[260px] flex-col gap-2 bg-ob-900 py-4 text-ob-100">
  <x-application-logo class="block h-9 w-auto fill-current text-ob-100" />

  <h3 class="ml-[10%] text-xs">Main Actions</h3>
  <div class="relative">
    <x-nav-side-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
      <div
        class="absolute left-0 h-4/5 w-1 rounded-r-lg bg-ob-900 transition-all duration-200 group-hover:bg-rp-500 group-[.active-group]:bg-rp-500">
      </div>
      <span class="grid h-5 w-5 place-items-center"><i class="fa-regular fa-objects-column"></i></span>
      <span>
        {{ __('Dashboard') }}
      </span>
    </x-nav-side-link>
  </div>

  <div class="relative">
    <x-nav-side-link :href="route('ad.ticket.index')" :active="request()->routeIs('ad.ticket.index')">
      <div
        class="absolute left-0 h-4/5 w-1 rounded-r-lg bg-ob-900 transition-all duration-200 group-hover:bg-rp-500 group-[.active-group]:bg-rp-500">
      </div>
      <span class="grid h-5 w-5 place-items-center"><i class="fa-regular fa-ticket"></i></span>
      <span>
        {{ __('Tickets Center') }}
      </span>
    </x-nav-side-link>
  </div>
  <h3 class="ml-[10%] mt-auto text-xs">User</h3>
  <div class="relative">
    <x-nav-side-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
      <div
        class="absolute left-0 h-4/5 w-1 rounded-r-lg bg-ob-900 transition-all duration-200 group-hover:bg-rp-500 group-[.active-group]:bg-rp-500">
      </div>
      <span class="grid h-5 w-5 place-items-center"><i class="fa-regular fa-user"></i></span>
      <span>
        {{ __('Account') }}
      </span>
    </x-nav-side-link>
  </div>
  <form class="relative" method="POST" action="{{ route('logout') }}">
    @csrf

    <x-nav-side-link :href="route('logout')"
      onclick="event.preventDefault();
                            this.closest('form').submit();">
      <div
        class="absolute left-0 h-4/5 w-1 rounded-r-lg bg-ob-900 transition-all duration-200 group-hover:bg-rp-500 group-[.active-group]:bg-rp-500">
      </div>
      <span class="grid h-5 w-5 place-items-center"><i class="fa-solid fa-arrow-right-from-bracket"></i> </span>
      <span>
        {{ __('Logout') }}
      </span>
    </x-nav-side-link>
  </form>
</div>
