<div class="ml-[10%] mb-1 text-xs whitespace-nowrap transition-all duration-200" :class="$store.open.on ? 'opacity-1 select-text' : 'opacity-0 select-none' ">
    {{$slot}}
</div>
