<div x-data="{ open: false }" class="hidden md:block">
    <aside class="z-100 sticky top-0 h-[100dvh] transition-all bg-ob-900 duration-200" :class="open ? 'w-[260px]' : 'w-[75px]'">
        <div class="h-full">
            @include('layouts.ad-nav-side')
        </div>
    </aside>
    <button class="absolute z-50 top-0 right-[10%] bg-purple-500" x-on:click="open = ! open">Open</button>
</div>
