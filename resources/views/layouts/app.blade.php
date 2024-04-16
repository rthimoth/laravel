<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-bold bg-gray-900 ">

    <x-jet-banner />

    <div class="min-h-screen bg-gray-900">

        <x-dashboard.nav />

        <div class="grid grid-cols-8">

            {{-- Sidenav --}}
            <x-dashboard.sidenav />

            <div class="col-span-7">
                <!-- Page Heading -->
                @if (isset($header))
                <header class="mx-6 mt-6 bg-custom rounded-lg ">
                    <div class="px-4 py-6 wrapper">
                        {{ $header }}
                    </div>
                </header>
                @endif

                <!-- Page Content -->
                <main class="m-6 ">
                    <div class="py-10">
                        {{ $slot }}
                    </div>
                </main>

            </div>

        </div>



    </div>

    @stack('modals')

    @livewireScripts
</body>
</html>
