@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex space-x-3 items-center px-2 pt-2 text-sm font-bold leading-5 text-white focus:outline-none transition'
: 'inline-flex space-x-3 items-center px-2 pt-2 text-sm font-bold leading-5 text-white transition hover:text-blue-400';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
