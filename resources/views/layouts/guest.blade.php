<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head />
</head>

<body class="h-screen w-screen
    flex flex-col justify-between 
    bg-gray-900 overflow-x-hidden">

    {{-- Navbar --}}
    <x-partials.nav />

    {{-- Slot --}}
    <div class="self-start grow w-full font-sans antialiased text-gray-900">
        {{ $slot }}
    </div>

    {{-- Footer --}}
    <x-partials.footer />

    <livewire:scripts />
    @bukScripts(true)
</body>

</html>
