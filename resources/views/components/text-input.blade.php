@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-rp-500 focus:ring-rp-500 rounded-md shadow-sm']) !!}>
