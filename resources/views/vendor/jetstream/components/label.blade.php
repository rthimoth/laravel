@props(['value'])

<label {{ $attributes->merge(['class' => 'text-sm font-bold block mb-4']) }}>
    {{ $value ?? $slot }}
</label>
