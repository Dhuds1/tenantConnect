<div class="grid place-items-center" :class="$store.open.on ? '' : 'w-full h-full'">
    <i class="{{$slot}}" :class="$store.open.on?'':'block'"></i>
</div>
