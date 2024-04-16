
<div id="writeContainer" class="
w-full h-auto 
p-5 bg-custom
rounded-2xl
flex flex-row space-x-5
justify-center items-center" >
    
    {{-- Avatar --}}
    <x-user.avatar />
    

    <div class=" flex flex-row space-x-5 w-5/6 m-0 ml-0">

        <input 
            type="text" 
            class=" hover:bg-white hover:bg-opacity-10 textareaHome text-white"
            id="postButton" name="postButton"
                placeholder="Let’s share what going on your mind..."
        />

        {{-- Start Discusson Button --}}
        <a href="{{ route('create') }}" id="createPostButton" class="
        bg-customorange
        text-white
        font-bold
        rounded-2xl 
        flex justify-center items-center
        w-40 p-2 py-1
        h-auto 
        ">
            {{ __('Create Post') }}
        </a>
    </div>
    
</div>
