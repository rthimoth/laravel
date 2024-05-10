<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-partials.head />
</head>

<body class="h-screen w-screen
    flex flex-col 
    justify-between items-center
    space-y-4 
    bg-gray-900
    overflow-hidden">

    <div id="topper" class="
	flex flex-row justify-center items-center
	w-full bg-gray-900 rounded-lg
	p-4 ">
		<a href="{{ route('home') }}" id="logoBottom" class="
		flex flex-row items-center space-x-2
		p-2 rounded-lg
		bg-custom
		">
            <x-logos.main class="h-12 w-12 " alt="Logo" />
			<span class="
			text-customorange text-xl
			py-1 font-bold
			"	
			>Forum
			</span>
		</a>

	</div>


    {{-- Slot --}}
    <div class="pb-32
	flex flex-col p-5 rounded-lg
	h-auto w-11/12 space-y-2
	justify-start items-center">
        <div id="topForm" class=" flex flex-row justify-between items-center w-full h-max rounded-lg bg-custom p-2 ">

            <h2 id="titlePage" class=" text-lg font-bold text-white "> Authentification </h2>

            <a href="{{ route('threads.index') }}" id="homeButton" class="
            mb-0 group p-1
            cursor-pointer 
            ">

                <button type="submit" class="flex flex-row space-x-2" >

                    <img class="
                    shrink-0 
                    orangefilter
                    h-8 w-8
                    "src="/img/home/home.png" alt=" home icon">

                    <span class="
                    self-start
                    text-lg
                    py-1 font-bold text-white
                    "
                    >Back
                    </span>
                </button>

            </a>

        </div>
        {{ $slot }}
    </div>

    <x-partials.footer />

    <livewire:scripts />
    @bukScripts(true)
</body>

</html>
