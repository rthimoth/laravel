<div x-data="
                        {
                            editReply:false,
                            focus: function() {
                                const textInput = this.$refs.textInput;
                                textInput.focus();
                            }
                        }" x-cloak>

<div id="commentsContainer" x-show="!editReply" class="
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

                                <x-user.avatar :user="$author" />

                                {{-- Author --}}         
                                <p id="authorComment" class="
                                text-sm
                                text-customorange
                                font-bold
                                "
                                > {{$author}}</p>
                                
                                {{-- Date Posted --}}
                                <p id="dateComment" class="
                                text-xs
                                text-gun
                                font-bold"
                                >{{ $createdAt->diffForHumans() }}</p>

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
                                    <livewire:like-reply :reply='App\Models\Reply::find($replyId)'/>
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
                            
                            <div class="
                            flex flex-row 
                            justify-center items-center
                            mb-0 group hover:cursor-pointer
                            hover:scale-90
                            p-1 
                            ">
                                @can(App\Policies\ReplyPolicy::DELETE, App\Models\Reply::find($replyId))
                                <button type="submit" id="deleteCommentButton" >
                                    <img class="
                                        h-3
                                        w-3
                                        rounded-lg 
                                        "
                                        src="/frontend/src/pics/trash.png" alt="trash icon" />
                                </button>
                                @endcan
                            </div>

                            <div class="
                            flex flex-row 
                            justify-center items-center
                            mb-0 group hover:cursor-pointer
                            hover:scale-90
                            p-1 
                            ">
                                @can(App\Policies\ReplyPolicy::UPDATE, App\Models\Reply::find($replyId))
                                <button type="submit" name="editCommentButton" id="editCommentButton" >
                                    {{ __('Edit') }}
                                    <img class="
                                        h-3
                                        w-3
                                        "
                                        src="/frontend/src/pics/edit.png" alt="edit icon" />
                                </button>
                                @endcan
                            </div>
                            
                
                        </div>

                        <div id="bodyComment">
                            {{ $replyOrigBody }}
                        </div>

                        <div x-show="editReply">

                            <form wire:submit.prevent="updateReply">
                                <input class="w-full bg-gray-100 border-none shadow-inner focus:ring-white" type="text" name="replyNewBody" wire:model.lazy="replyNewBody" x-ref="textInput" x-on:keydown.enter="editReply = false" x-on:keydown.escape="editReply = false">

                                <div class="mt-2 space-x-3 text-sm">
                                    <button type="button" class="text-green-400" x-on:click="editReply = false">
                                        Cancel
                                    </button>
                                    <button type="submit" class="text-red-400" x-on:click="editReply = false">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                </div>