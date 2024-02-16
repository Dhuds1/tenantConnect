@props(['active'])

@php
$classes = ($active ?? false)
            ? 'active-group group flex items-center gap-2 bg-ob-200 w-4/5 mx-auto py-2 px-4 text-center text-rp-500 rounded border-2 border-ob-900'
            : 'group flex items-center gap-2 w-4/5 mx-auto py-2 px-4 text-center text-ob-100 rounded border-2 border-ob-900 hover:border-rp-500 transition-all duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
