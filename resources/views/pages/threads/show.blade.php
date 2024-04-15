<x-guest-layout>
    <main class="grid grid-cols-4 gap-8 mt-8 wrapper">

        <x-partials.sidenav />

        <section class="flex flex-col col-span-3 gap-y-4">
            <x-alerts.main/>
            <small class="text-sm text-gray-400">Threads>{{ $category->name }}>{{ $thread->title() }}>topic</small>

            <article class="p-5 bg-white shadow">
                <div class="grid grid-cols-8">

                    {{-- Avatar --}}
                    <div class="col-span-1">
                        <x-user.avatar/>
                        <span>{{ $thread->author()->name }}</span>
                    </div>

                    {{-- Thread --}}
                    <div class="col-span-7 space-y-6">
                        <div class="space-y-3">
                            <h2 class="text-xl tracking-wide hover:text-blue-400"></h2>
                            <p class="text-gray-500">
                                {{ $thread->title }}
                            </p>
                            <p class="text-gray-500">
                                {!! $thread->body() !!}
                            </p>
                        </div>

                        <div class="flex justify-between">

                            {{-- Likes --}}
                            <div class="flex space-x-5 text-gray-500">
                                <a href="" class="flex items-center space-x-2">
                                    <x-heroicon-o-heart class="w-5 h-5 text-red-300" />
                                    <span class="text-xs font-bold">148</span>
                                </a>
                            </div>

                            {{-- Date Posted --}}
                            <div class="flex items-center text-xs text-gray-500">
                                <x-heroicon-o-clock class="w-4 h-4 mr-1" />
                                Posted: {{ $thread->created_at->diffForHumans() }}
                            </div>


                            {{-- Reply --}}
                            <a href="" class="flex items-center space-x-2 text-gray-500">
                                <x-heroicon-o-reply class="w-5 h-5" />
                                <span class="text-sm">Reply</span>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            {{-- Replies --}}
{{--            <div class="mt-6 space-y-5">--}}
            @foreach($thread->replies() as $reply)
            <div class="p-5 space-y-4 text-gray-500 bg-white border-l border-blue-300 shadow">
                <div class="grid grid-cols-8">
                    <button class="flex items-center text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                         <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
{{--                        <img class="object-cover w-16 h-16 rounded" src="{{ asset('img/avatars/person4.jpg') }}" alt="Person One" />--}}
                    </button>
                    <div class="col-span-7 space-y-4">
                        <p>
                            {!! $reply->body() !!}
                        </p>
                        <div class="flex justify-between">
                            {{-- Likes --}}
                            <div class="flex space-x-5 text-gray-500">
                                <a href="" class="flex items-center space-x-2">
                                    <x-heroicon-o-heart class="w-5 h-5 text-red-300" />
                                    <span class="text-xs font-bold">30</span>
                                </a>
                            </div>

                            {{-- Date Posted --}}
                            <div class="flex items-center text-xs text-gray-500">
                                <x-heroicon-o-clock class="w-4 h-4 mr-1" />
                                Posted: {{ $reply->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            </div>--}}
            @endforeach

            {{--Replies--}}
{{--            @foreach($thread->replies() as $reply)--}}
{{--                <div class="p-5 space-y-4 text-gray-500 bg-white border-1 border-blue-300 shadow">--}}

{{--                </div>--}}
{{--            @endforeach--}}

            @auth
            <div class="p-5 space-y-4 bg-white shadow">
                <h2 class="text-gray-500">Post a reply</h2>
                <x-form action="{{ route('replies.store') }}">
{{--                    @csrf--}}
{{--                    <!-- ... -->--}}
                    <div>
                        <x-trix name="body" styling="bg-gray-100 shadow-inner h-40" />
                        <x-form.error for="body"/>
                        <input type="hidden" name="replyAble_id" value="{{ $thread->id() }}">
                        <input type="hidden" name="replyAble_type" value="threads">
                    </div>
                    <div class="grid">
                        {{-- Button --}}
                        <x-buttons.primary class="justify-self-end">
                            {{ __('Post') }}
                        </x-buttons.primary>
                    </div>
                </x-form>
            </div>
            @else
            <div class ="bg-blue-200 p-4 text-gray-500 flex justify-between">
                <h2> Please login to leave a comment</h2>
                <a href="{{ route('login') }}">Login</a>
            </div>
            @endauth
        </section>
    </main>
</x-guest-layout>