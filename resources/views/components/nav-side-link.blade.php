@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center gap-2 bg-ob-200 w-4/5 mx-auto py-2 px-4 text-center text-rp-500 rounded border-2 border-ob-500'
            : 'flex items-center gap-2 w-4/5 mx-auto py-2 px-4 text-center text-white rounded border-2 border-ob-500 hover:border-rp-500 transition-all duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
