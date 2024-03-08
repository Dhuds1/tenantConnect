<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('open', {
            on: Alpine.$persist(false),
            toggle() {
                this.on = ! this.on
            },
            change() {
                this.on = true;
            }
        })
    })
</script>
<div x-data="$store.open" class="hidden md:block">
    <aside class="z-100 sticky top-0 h-[100dvh] transition-all bg-ob-900 duration-200"
        :class="$store.open.on ? 'w-[260px]' : 'w-[75px]'">
        <div class="h-full">
            @include('layouts.ad-nav-side')
        </div>
    </aside>
    <button x-data @click="$store.open.toggle()"
        class="grid place-content-center border-[3px] border-rp-500 w-[26px] rounded-md aspect-square transition-all duration-200  fixed z-50 top-[75px]"
        :class="$store.open.on ? 'rotate-45 left-[calc(260px-13px)] text-rp-500 bg-white ' : 'bg-rp-500 text-white rotate-[225deg]  left-[calc(75px-13px)]'"><i
            class="-rotate-45 fa-solid fa-chevrons-right"></i></button>
            <div x-text="$store.open"> </div>
</div>

