<div class="h-full w-full rounded-lg 
		bg-custom
		flex flex-row 
		space-x-96
		justify-center
		items-center p-12
		pb-24">

    <div class="h-max w-full
			flex flex-col 
			justify-center items-center">
        <div class="flex items-center justify-center py-4 sm:max-w-md ">
            <a href="{{ route('home') }}">
                {{ $logo }}
            </a>
        </div>
        {{ $slot }}
    </div>
    <div id="authentificationImageContainer" class="w-full">
        <img src="/img/login/login.png"  class="self-center w-3/4 h-3/4" alt="formIcon">
    </div>

</div>
