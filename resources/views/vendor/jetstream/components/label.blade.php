@props(['value'])

<label {{ $attributes->merge(['class' => 'text-sm font-bold text-white block mb-4']) }}>
    {{ $value ?? $slot }}
</label>
