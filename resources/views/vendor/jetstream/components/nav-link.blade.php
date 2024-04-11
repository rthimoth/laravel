@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-lg font-bold leading-5 text-white focus:outline-none focus:border-indigo-700 transition'
            : 'inline-flex items-center hover:border-b-2 hover:border-white  text-lg font-bold leading-5 text-white focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
