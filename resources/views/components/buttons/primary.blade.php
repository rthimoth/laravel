<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-black mb-4 bg-white hover:text-orange-500 hover:border-orange-500 font-bold rounded-lg text-xl px-5 py-2.5 text-center']) }}>
    {{ $slot }}
</button>
