    
    
    <li  class="
        rounded-lg
        w-full h-max
        flex flex-col
        space-y-8
        items-center
        justify-center
        bg-custom
        p-5
        hover:bg-white hover:bg-opacity-10
        " >

        <div id="mainPostContainer" class="flex flex-col space-y-2 items-center
        justify-center w-full">
        {{-- Content --}}
            <div id="infosPostContainer" class="
            h-auto
            justify-between
            w-full
            flex-row flex
            items-center
            rounded-lg
            m-0
            ">
                <a href="{{ route('threads.show', [$thread->category->slug, $thread->slug]) }}"  class="space-y-2">
                    <p class="
                    text-xl tracking-wide
                    text-white
                    font-bold
                    "
                    > {{ $thread->title() }}</p>

                    <p class="text-gray-500">
                                {{ $thread->excerpt(250) }}
                    </p>
                </a>

            </div>
            
            {{-- tags --}}
            <ul id="categoriesList"  class=" flex flex-row item-center justify-start w-full -ml-2">
            @foreach($thread->tags() as $tag)
                <a href="{{ route('threads.tags.index', $tag->slug()) }}" class="
                rounded-2xl
                p-2 bg-customgray
                text-xxs
                text-gun
                font-bold
                "
                >  {{ $tag->name() }}</a>
            @endforeach
            </ul>
            
        </div>
        <div id="footerPostContainer" class="flex flex-row 
        items-center justify-between
        space-x-96
        w-full
        m-0">
            <div id="authorinfosContainer" class="flex flex-row 
            items-center
            space-x-2
            m-0
            ">
            {{-- Avatar --}}
            <x-user.avatar :user="$thread->author()"/>

                <div id="authordateContainer"
                class="flex flex-col 
                items-start text-xs
                justify-between
                ">
                
                    <p class="
                    font-bold
                    text-white
                    hover:cursor-pointer
                    hover:underline"
                    > {{ $thread->author()->name }}</p>

                    
                    {{-- Thread Date --}}
                    <p class="
                    text-xxs
                    font-bold
                    text-gun"
                    >{{ $thread->created_at->diffForHumans() }}</p>
                </div>
            </div>
            {{-- Indicators --}}

            {{-- Edit Button --}}
                <div class="flex space-x-2 
                font-bold
                text-gun">
                        @can(App\Policies\ThreadPolicy::UPDATE, $thread)
                        <x-links.secondary href="{{ route('threads.edit', $thread->slug) }}">
                            Edit
                        </x-links.secondary>
                        @endcan

                        @can(App\Policies\ThreadPolicy::DELETE, $thread)
                            <livewire:thread.delete :thread="$thread" :key="$thread->id()" />
                        @endcan
                </div>
        </div>
        
    </li>
  



       


        

