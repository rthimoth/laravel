@props(['active'])


@php
$classes = ($active ?? false)
? 'inline-flex items-centerrounded-2xl
                        p-4 bg-customgray text-sm font-bold leading-5  text-white focus:outline-none focus:border-gray-200 transition'
: 'inline-flex items-center rounded-2xl
                        p-4 bg-customgray border-transparent text-sm font-bold leading-5 text-white focus:outline-none hover:text-orange-500 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>