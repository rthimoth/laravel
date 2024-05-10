<div x-data="
                        {
                            editReply:false,
                            focus: function() {
                                const textInput = this.$refs.textInput;
                                textInput.focus();
                            }
                        }" x-cloak>

<div id="commentsContainer" x-show="!editReply" class="
    w-full h-auto bg-custom rounded-lg p-2 my-4
    flex flex-col justify-center items-center
    ">
        
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
                <x-user.avatar :user="$author"/>

                <div class="mt-2
                    flex flex-col justify-center items-start space-y-0.5">
                        
                    {{-- Author --}}
                    <p class="

                    text-customorange
                    font-bold"
                    >{{$author->name}}</p>                                      

                    {{-- Date Posted --}}
                    <p id="dateComment" class="
                    text-xxs
                    text-gun
                    font-bold"
                    >{{ $createdAt->diffForHumans() }}</p>

                </div>
                
            </div>  
            <div id="Like&ReplyReadPostContainer" class="
                flex flex-row w-full
                justify-end
                items-center">
                {{-- Likes --}}
                    <div>
                        <livewire:like-reply :reply='App\Models\Reply::find($replyId)'/>
                    </div>
                </div>
        </div>
        <div id="bodyComment"
        class=" bg-custom flex flex-col w-full h-auto justify-center items-center "
        >

            <div id="bodyPost" class="
            w-full h-auto
            text-lg text-white
            font-bold
            p-2
            "> {{ $replyOrigBody }}
            </div>

            <div id="Like&ReplyReadPostContainer" class="
            flex flex-row w-full
            justify-end
            items-center">

                
                <div class="
                flex flex-row 
                justify-center items-center
                mb-0 group hover:cursor-pointer
                
                p-1 
                ">
                    @can(App\Policies\ReplyPolicy::UPDATE, App\Models\Reply::find($replyId))
                        <x-links.secondary x-on:click="editReply = true; $nextTick(() => focus())" class="cursor-pointer">
                            {{ __('Edit') }}
                        </x-links.secondary>
                    @endcan
                </div>

                <div class="
                flex flex-row 
                justify-center items-center
                mb-0 group hover:cursor-pointer
                
                p-1 
                ">
                        @can(App\Policies\ReplyPolicy::DELETE, App\Models\Reply::find($replyId))
                    <livewire:reply.delete :replyId="$replyId" :wire:key="$replyId" :page="request()->fullUrl()" />
                    @endcan
                </div>

                
            </div>
        </div>  
</div>
<div x-show="editReply">
    <form wire:submit.prevent="updateReply">
        <input class="focus:ring focus:ring-gray-200 bg-gray-500 sm:text-sm rounded-lg  block mb-4 w-full p-2.5" type="text" name="replyNewBody" wire:model.lazy="replyNewBody" x-ref="textInput" x-on:keydown.enter="editReply = false" x-on:keydown.escape="editReply = false">

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