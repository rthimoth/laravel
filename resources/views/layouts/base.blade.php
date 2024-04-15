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

            <h2 id="titlePage" class=" text-lg font-bold text-white "> Login </h2>

            <form action="/" method="post" id="homeButton" class="
            mb-0 group p-1
            cursor-pointer 
            ">

                <button type="submit" class="flex flex-row space-x-2" >

                    <img class="
                    shrink-0 
                    orangefilter
                    h-8 w-8
                    "src="/frontend/src/pics/home.png" alt=" home icon">

                    <span class="
                    self-start
                    text-lg
                    py-1 font-bold text-white
                    "
                    >Back
                    </span>
                </button>

            </form>

        </div>
        {{ $slot }}
    </div>

    <div id="footer" class="
            flex 
			self-end
            w-full
            h-auto
            items-center
            justify-between 
            p-2
            bg-gray-900
            
            ">

                <div  id="logoYnovContainerBottom"class="
                flex flex-row items-center
                bg-custom rounded p-2
                ">
                    <img src="/frontend/src/pics/prj_ynov.jpg" class="h-8 mr-3" alt="Logo" />
                    

                    <span class="
                    text-white 
                    py-1 font-bold
                    
                    "
                    >2ème	 année Informatique
                    </span>
                </div>

                <div id="About" class="flex flex-row space-x-1 bg-custom rounded-lg">

                    <a id="github" href="https://ytrack.learn.ynov.com/git/syohan/forum_ynov" class="
                    text-2xl 
                    p-2
                    text-center
                    ">
                        <img src="/frontend/src/pics/github.png" class="w-10 h-10">
                    </a>

                    <a id="linkedin" href="https://www.linkedin.com/in/cl%C3%A9ment-penot-09326b143/" class="
                    p-2 
                    items-center
                    flex  
                    ">
                        <img src="/frontend/src/pics/linkedin.png" class="w-10 h-10">
                    </a>

                </div>
    </div>

    <livewire:scripts />
    @bukScripts(true)
</body>

</html>
