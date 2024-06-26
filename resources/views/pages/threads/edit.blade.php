<x-guest-layout>
    <main class="grid grid-cols-4 gap-8 mt-8 wrapper">
        <x-partials.sidenav />
        <section class="flex flex-col col-span-3 gap-y-4">
            <small class="text-sm text-gray-400">threads>{{ $thread->title() }}>update</small>
            <article class="p-5 ">
                <div class="grid grid-cols-8 ">
                    {{-- Create --}}
                    <div class="col-span-7 space-y-6">
                        <x-form action="{{ route('threads.update', $thread->slug) }}">
                            <div class="space-y-8">
                                {{-- Title --}}
                                <div class=" w-full h-auto bg-custom p-2 rounded-lg ">
                                    <x-form.label for="title" value="{{ __('Title') }}" />
                                    <x-form.input id="title" class="block w-full bg-gray-500  mt-1" type="text" name="title" :value="$thread->title()"  required autofocus />
                                    <x-form.error for="title" />
                                </div>
                                {{-- Category --}}
                                <div class="w-full h-auto bg-custom p-2 rounded-lg">
                                    <x-form.label for="category" value="{{ __('Category') }}" />
                                    <select name="category" id="category" class="w-full text-sm bg-gray-500 rounded-md focus:ring focus:ring-gray-200 ">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id() }}"
                                            @if($category->id() == $selectedCategory->id()) selected @endif>
                                            {{$category->name()}}
                                        </option>
                                    @endforeach
                                    </select>
                                    <x-form.error for="category" />
                                </div>

                                {{-- Tags --}}
                                <div class="w-full h-auto bg-custom p-2 rounded-lg">
                                    <x-form.label for="tags" value="{{ __('Tags') }}" />
                                    <select name="tags[]" id="tags" x-data="{}" x-init="function () { choices($el) }"  multiple>
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id()}}" @if(in_array($tag->id(), $oldTags)) selected @endif>
                                                {{$tag->name()}}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-form.error for="tag" />
                                </div>
                                {{-- Body --}}

                                <div class="w-full h-auto bg-custom p-2 rounded-lg">
                                    <x-form.label for="body" value="{{ __('Description') }}" />
                                    <x-trix name="body" class="bg-white p-2 rounded-lg" styling="shadow-inner bg-white">
                                        {{ $thread->body() }}
                                    </x-trix>

                                    <x-form.error for="body" />
                                </div>
                                {{-- Button --}}
                                <div>
                                    <x-buttons.primary>
                                        {{ __('Update') }}
                                    </x-buttons.primary>
                                </div>
                            </div>
                        </x-form>
                    </div>
                </div>
            </article>
        </section>
    </main>
</x-guest-layout>
