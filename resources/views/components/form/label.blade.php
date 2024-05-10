@props(['value'])

<label {{ $attributes->merge(['class' => 'block pl-2 py-2 text-white font-bold uppercase mb-2']) }}>
    {{ $value ?? $slot }}
</label>
