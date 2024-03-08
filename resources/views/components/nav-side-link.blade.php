@props(['active', 'name'])

@php
$classes = ($active ?? false)
            ? 'h-[45px] active-group group flex items-center gap-2 bg-link-active w-4/5 mx-auto text-center text-rp-500 rounded border-2 border-ob-900'
            : 'h-[45px] group flex items-center gap-2 w-4/5 mx-auto text-center text-link-text rounded border-2 border-ob-900 hover:border-rp-500 transition-all duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} :class="open ? 'px-4 py-0' : 'px-0 w-[45px]' ">
    <div
        class="absolute left-0 h-4/5 w-1 rounded-r-lg bg-ob-900 transition-all duration-200 group-hover:bg-rp-500 group-[.active-group]:bg-rp-500">
      </div>
      {{$slot}}
</a>
