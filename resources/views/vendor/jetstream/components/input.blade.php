@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'focus:ring focus:ring-gray-200 rounded-md bg-gray-500 rounded-md sm:text-sm rounded-lg  block mb-4 w-full p-2.5 ']) !!}>
