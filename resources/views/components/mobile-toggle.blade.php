<div x-data="{ open: false }" class="md:hidden">
    <aside class="z-100 fixed top-0 h-[100dvh] transition-all bg-ob-900 duration-200" :class="open ? 'w-full' : 'w-0'">
        <div class="h-full" :class="open ? 'delay-100' : 'delay-0 opacity-0'">
            @include('layouts.ad-nav-side')
        </div>
    </aside>
    <button class="absolute z-50 right-[10%] bg-pink-500" x-on:click="open = ! open">Open</button>
</div>
