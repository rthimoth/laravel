<div>
    @if(Auth::guest())
        <div id="likeBtnRead" class=
            "
            bg-custom p-5 m-2 text-sm
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
            <span class="text-xs font-bold">{{ count($this->reply->likes()) }}</span>
            <p>Like </p>

        </div>
    @else
        <button  wire:click="toggleLike" id="likeBtnRead" class=
        "
        bg-custom p-5 m-2 text-sm
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
            <span class="text-xs font-bold">{{ count($this->reply->likes()) }}</span>
            <p>Like </p>

        </button>
    @endif
</div>
