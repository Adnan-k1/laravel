@props(['active' => false])

@php
$classes = $active
    ? 'bg-gray-950/50 text-white'
    : 'text-gray-300 hover:bg-white/5 hover:text-white';
@endphp

<a {{ $attributes->merge(['class' => "$classes rounded-md px-3 py-2 text-sm font-medium"]) }}
   aria-current="{{ $active ? 'page' : '' }}">
   {{ $slot }}
</a>
