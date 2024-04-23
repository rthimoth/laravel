<button {{ $attributes->merge(['type' => 'button', 'class' => 'bg-white hover:text-orange-500 hover:border-orange-500 font-bold rounded-lg text-sm px-5 py-2.5 text-center']) }}>
    {{ $slot }}
</button>
