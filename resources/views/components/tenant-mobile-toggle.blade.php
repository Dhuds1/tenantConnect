<div x-data="{ open: false }" class="md:hidden">
    <aside class="z-[100] fixed top-0 h-[100dvh] transition-all bg-ob-900 duration-200" :class="open ? 'w-full' : 'w-0'">
        <div class="h-full" :class="open ? '' : 'opacity-0'">
            @include('layouts.navigation')
        </div>
    </aside>
    <button class="absolute z-[101] right-[10%] bg-pink-500" x-on:click="open = ! open"  @click="$store.open.change()">Open</button>
</div>
