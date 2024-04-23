

<x-guest-layout>
    <main class="grid grid-cols-4 gap-8 mt-8 wrapper">

        <x-partials.sidenav />

        <section class="flex flex-col
        w-full h-auto rounded-lg
        items-center space-y-2
        justify-center
        col-span-2 ">

            <x-alerts.main/>
            <small class=" mb-2 self-start text-sm text-gray-400">Threads>{{ $category->name }}>{{ $thread->title() }}</small>

            <div id="mainPostContainer" class=" w-full h-auto flex flex-col space-y-4 items-center bg-custom rounded-lg p-2">
                <div id="infosPostContainer" class="
                shrink 
                h-auto 
                justify-between items-center
                w-full
                flex flex-row
                rounded-t-lg
                ">
                    <div class="flex flex-row space-x-1 justify-center items-center ">
                        {{-- Avatar --}}
                        <x-user.avatar :user="$thread->author()"/>

                        <div class="flex flex-col justify-center items-start space-y-0.5">
                            <div 
                            class="flex flex-row 
                            space-x-2 justify-center
                            items-center
                            rounded-lg text-sm
                            ">

                                
                                {{-- Author --}}
                                <p class="
                                text-customorange
                                font-bold"
                                >{{$thread->author()->name}}</p>
                                {{-- Date Posted --}}

                                <p class="
                                text-white
                                font-bold"
                                >{{ $thread->created_at->diffForHumans() }}</p>
                                


                            </div>
                            {{-- Category--}}
                            <div class="
                            rounded-2xl
                            px-2 py-0.5 w-max bg-customgray
                            text-xxs
                            text-gun
                            font-bold
                            "
                            > {{ $category->name }}</div>

                        </div>
                    </div>  
                    <a  href="{{ route('home') }}" id="homeButton" class=" text-white hover:text-orange-500  font-bold rounded-lg  p-2  text-sm py-3 text-center bg-customgray mt-0
                    ">
        
                    Back to threads
        
                    </a> 
                </div>

                {{-- Thread --}}
                <div id="readPostContainer" class="
                rounded-lg
                w-full
                flex flex-col
                space-y-8
                items-center 
                justify-center
                ">
        
                    <div id="textPostContainer"
                    class=" bg-custom flex flex-col w-full h-auto justify-center items-center "
                    >
                        <h3 class="self-start w-full rounded-t-xl bg-custom  text-4xl p-2 font-bold text-white ">{{ $thread->title }} </h3>

                        <div id="bodyPost" class="
                        w-full h-auto
                        text-lg text-white
                        font-bold
                        p-2
                        "> {!! $thread->body() !!}
                        </div>

                        <div id="Like&ReplyReadPostContainer" class="
                        flex flex-row w-full
                        justify-end
                        items-center">
                        {{-- Likes --}}
                            <div>
                                <livewire:like-thread :thread="$thread" />
                            </div>
                            <!-- <a href="" id="replyBtnRead" class=
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
                                src="/img/comments/commentWhite.png" alt="replylogo" />
                                {{-- Reply --}}
                                <p class="
                                text-sm
                                text-white
                                font-bold
                                "
                                >Replies </p>

                            </a> -->
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
                    

                            
                </div>
            </div>
            @auth
            <form action="{{ route('replies.store') }}" class="
                justify-between items-center
                flex flex-col p-2 
                rounded-lg bg-custom
                space-y-5 h-auto
                w-full ">
                <input type="hidden" name="replyAble_id" value="{{ $thread->id() }}">
                <input type="hidden" name="replyAble_type" value="threads">
                <x-form.error for="body"/>
                <textarea type="text" name="body" id="bodyComment" class=" w-full grow h-10 rounded-lg text-black font-bold bg-white m-0 pl-1" placeholder="insert Comment here" cols="30" rows="10"></textarea>
                
                {{-- Button --}}
                <button type="submit" name="buttonCommentReadPost" value="Add" class="
                h-full w-20 
                self-end
                hover:cursor-pointer p-5 text-sm
                    text-white
                    font-bold m-2
                flex
                items-center justify-center bg-customgray
                rounded-lg hover:text-orange-500
                ">
                    {{ __('Post') }}
                
                </button>

            </form>
            @else
            <div class ="bg-custom p-4 w-full text-white flex flex-row space-x-2 justify-between">
                <a href="{{ route('login') }}"> Click here to login and leave a comment</a>
            </div>
            @endauth
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
                    @foreach($thread->replies() as $reply)
                        <livewire:reply.update :reply="$reply" :wire:key="$reply->id()" />
                    @endforeach
                        
                </div>
            

            </div>
        </section>
    </main>
</x-guest-layout>
