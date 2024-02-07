@props(['btn'])

@php
$classes = ($btn ?? false)
            ? "ml-auto py-2 px-4 bg-pink-200 inline-block border-2 border-pink-200 rounded-md"
            : "my-auto py-2 px-4 inline-block border-2 border-pink-200 rounded-md";
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
