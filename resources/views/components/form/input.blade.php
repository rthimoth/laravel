@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' focus:ring focus:ring-gray-200 rounded-md bg-gray-500']) !!}>
