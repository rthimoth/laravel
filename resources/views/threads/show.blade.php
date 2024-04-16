<x-guest-layout>
    <main class="grid grid-cols-4 gap-8 mt-8 wrapper">

        <x-partials.sidenav />

        <section class="flex flex-col
        w-full h-auto rounded-lg
        items-center space-y-4
        justify-center
        col-span-2 ">


                <div id="infosPostContainer" class="
                shrink mb-2
                h-auto
                bg-custom
                justify-between items-center
                w-full
                flex
                rounded-lg
                
                ">
                    <div 
                    class="flex flex-row 
                    space-x-2
                    items-center
                    rounded-lg p-2
                    ">
                        {{-- Avatar --}}
                        <x-user.avatar />
                        {{-- Author --}}
                        <p class="
                        text-lg 
                        text-customorange
                        font-bold
                        hover:cursor-pointer
                        hover:underline"
                        > AR. AKIR</p>
                        {{-- Date Posted --}}
                        <p class="
                        text-white
                        font-bold"
                        >at  01/01/2000</p>

                    </div>
                        
                    <a  href="{{ route('home') }}" id="homeButton" class=" text-white hover:text-orange-500  font-bold rounded-lg  px-5 py-2.5 text-center
                    ">
        
                    Back to threads ->
        
                    </a> 
                </div>

                    {{-- Thread --}}
                    

                    <div id="Like&ReplyReadPostContainer" class="
                            flex flex-row 
                            space-x-5 mb-0
                            justify-center
                            items-center"> 

                            <h3 class="w-fullrounded-t-xl text-center               bg-custom  text-xl p-2 font-bold text-white ">Title </h3>
                    
                            <a  href="" id="likeBtnRead" class=
                            "
                            bg-custom
                            flex flex-row 
                            items-center
                            space-x-1
                            w-max h-max
                            hover:bg-orange-500 p-1 rounded-lg
                            ">
                                <img id="likeImage" class="
                                h-6
                                w-6
                                rounded-lg  
                                scaleLike
                                "
                                src="/img/like/like.png" alt="likelogo" />
                                {{-- Likes --}}
                                <p class="
                                text-sm
                                text-white
                                font-bold
                                "
                                >Likes </p>
    
                            </a>

                            <a href="" id="replyBtnRead" class=
                            "
                            bg-custom
                            flex flex-row 
                            items-center
                            space-x-1
                            w-max h-max
                            hover:bg-orange-500 p-1 rounded-lg
                            ">
                                <img id="replyImage" class="
                                h-6
                                w-6
                                rounded-lg  
                                scaleLike
                                "
                                src="/img/like/like.png" alt="replylogo" />
                                {{-- Reply --}}
                                <p class="
                                text-sm
                                text-white
                                font-bold
                                "
                                >Reply </p>
    
                            </a>

            
                        </div>

                    <div id="readPostContainer" class="
                    rounded-lg
                    w-full
                    flex flex-col
                    space-y-8
                    items-center 
                    justify-center
                    ">
            
                        <div id="textPostContainer"
                        class=" bg-custom flex w-full h-auto justify-center items-center "
                        >

                            <div id="bodyPost" class="
                            w-full h-auto
                            text-lg text-white
                            font-bold
                            p-2
                            ">Body
                            </div>
                            
                        </div>

                                    
                        <!-- <div id="footerReadPostContainer"
                        class="flex flex-row 
                        items-center space-x-2
                        justify-center
                        w-max  p-2 rounded-t-xl
                        ">
                            
                            <button type="submit" id="editPostButton" name="editPostButton" value="" class="
                            px-3 py-2 
                            text-xl text-center text-gray-700
                            focus:ring-1 focus:outline-none focus:ring-gray-700
                            hover:text-orange-600
                            font-yanice
                            group
                            ">
                            <img class="
                                h-6
                                w-6
                                rounded-lg 
                                orangefilter
                                "
                                src="/frontend/src/pics/edit.png" alt="edit icon" />
                            </button>
                            
            
                            <form action="/DeletePost" method="post" class="
                                w-max h-max flex flex-row justify-center items-center
                                group mb-0
                                hover:cursor-pointer
                            ">
                                <input type="hidden" name="postId">
                                <button type="submit" name="deleteButton" class="
                                ">
                                <img class="
                                    h-6
                                    w-6
                                    rounded-lg 
                                    orangefilter
                                    "
                                    src="/frontend/src/pics/trash.png" alt="trash icon" />
                                </button>
                            </form>
            
                            
                                
                        </div> -->
            
                        <form action="/CreationComment" method="post" class="
                            justify-between items-center
                            flex flex-col p-2
                            m-0 rounded-lg bg-gray-500
                            space-y-2
                            w-full ">
            
                            <!-- <textarea name="bodyComment" id="bodyComment" class=" w-full grow h-10 rounded-lg bg-custom text-white font-bold m-0 pl-1" placeholder="insert Comment here" cols="30" rows="10"></textarea> -->
                            <x-trix name="about" styling=" m-0 pl-1 w-full  font-bold h-40 bg-gray-100" />
                            
                            <button type="submit" name="buttonCommentReadPost" value="Add" class="
                            h-full w-20 p-2
                            self-end flex justify-center items-center
                            hover:cursor-pointer
                            bg-orange-500 hover:bg-orange-400
                            font-yanice
                            rounded-lg
                            ">
                            
                                <img class="
                                    h-5
                                    w-5
                                    rounded-lg 
                                    "
                                    src="/img/comments/paper-plane.png" alt="CommentariesSend" />
                            
                            </button>
            
                        </form>
                        {{-- Replies --}}
                        <div id="commentsWrapper" class="
                        p-2 ml-0 w-full
                        flex flex-col space-y-1
                        text-white font-bold
                        ">
                                
                            <div id="commentsContainer" class="
                            w-max h-auto bg-custom rounded-lg p-2
                            flex flex-col justify-center items-center
                            ">
                                <div id="infosPostContainer" class="
                                shrink-0
                                h-max
                                justify-between
                                w-full
                                flex-row flex
                                items-center
                                rounded-lg
                                
                                ">
                                    <div id="authorDateCommentContainer"
                                    class="flex flex-row 
                                    space-x-2
                                    items-center
                                    rounded-lg p-0.5
                                    ">
                                    <button class="flex items-center text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                        {{-- <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --}}
                                        <img class="object-cover w-16 h-16 rounded" src="{{ asset('img/avatars/person4.jpg') }}" alt="Person One" />
                                    </button>
                                        {{-- Author --}}         
                                        <p id="authorComment" class="
                                        text-sm
                                        text-customorange
                                        font-bold
                                        hover:cursor-pointer
                                        hover:underline"
                                        > AR. Akir</p>
                                        
                                        {{-- Date Posted --}}
                                        <p id="dateComment" class="
                                        text-xs
                                        text-gun
                                        font-bold"
                                        >01/01/2000</p>

                                        {{-- Likes --}}
                                        <a  href="" id="likeBtnRead" class=
                                        "
                                        bg-custom
                                        flex flex-row 
                                        items-center
                                        space-x-1
                                        w-max h-max
                                        hover:bg-orange-500 p-1 rounded-lg
                                        ">
                                            <img id="likeImage" class="
                                            h-6
                                            w-6
                                            rounded-lg  
                                            scaleLike
                                            "
                                            src="/img/like/like.png" alt="likelogo" />
                                            {{-- Likes --}}
                                            <p class="
                                            text-sm
                                            text-white
                                            font-bold
                                            "
                                            >Likes </p>
                
                                        </a>
        
                                    </div>
                                    
                                    <!-- <form action="/DeleteComment" method="post" class="
                                    flex flex-row 
                                    justify-center items-center
                                    mb-0 group hover:cursor-pointer
                                    hover:scale-90
                                    p-1 
                                    ">
                                        <button type="submit" id="deleteCommentButton" >
                                            <img class="
                                                h-3
                                                w-3
                                                rounded-lg 
                                                orangefilter
                                                "
                                                src="/frontend/src/pics/trash.png" alt="trash icon" />
                                        </button>
                                    </form> -->
        
                                    <!-- <form action="/EditComment" method="post" class="
                                    flex flex-row 
                                    justify-center items-center
                                    mb-0 group hover:cursor-pointer
                                    hover:scale-90
                                    p-1 
                                    ">
                                        <button type="submit" name="editCommentButton" id="editCommentButton" value="" >
                                            <img class="
                                                h-3
                                                w-3
                                                orangefilter
                                                "
                                                src="/frontend/src/pics/edit.png" alt="edit icon" />
                                        </button>
                                    </form> -->
                                    
                        
                                </div>
        
                                <div id="bodyComment">
                                Body
                                </div>
                                
                            </div>
            
                        </div>

                                
                    </div>
        </section>
    </main>
</x-guest-layout>
