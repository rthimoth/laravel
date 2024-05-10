<div>
    @if(Auth::guest())
        <div id="likeBtnRead" class=
            "
            bg-custom p-4 m-2 text-xs
            text-white
            font-bold
            flex flex-row  space-x-2
            items-center justify-center bg-customgray
            rounded-lg hover:text-orange-500
            ">
            <img id="likeImage" class="
            h-5
            w-5
            rounded-lg  
            scaleLike
            "
            src="/img/like/like.png" alt="likelogo" />
            <span class="text-xs font-bold">{{ count($this->thread->likes()) }}</span>
            <p>Like </p>

        </div>
    @else
        <button  wire:click="toggleLike" id="likeBtnRead" class=
        "
        bg-custom p-5 m-2 text-xs
        text-white
        font-bold
        flex flex-row  space-x-2
        items-center justify-center bg-customgray
        rounded-lg hover:text-orange-500
        ">
            <img id="likeImage" class="
            h-5
            w-5
            rounded-lg  
            scaleLike
            "
            src="/img/like/like.png" alt="likelogo" />

            <div class="flex flex-row justify-center items-center mt-0.5 space-x-0.5">
                <span >{{ count($this->thread->likes()) }}</span>
                <p>Likes </p>
            </div>

        </button>
    @endif
</div>
