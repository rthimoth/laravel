<x-guest-layout>
    <main class="grid grid-cols-4 gap-8 mt-8 wrapper">
        <x-partials.sidenav />
        <section class="flex flex-col col-span-3 gap-y-4">
            <article class="p-5 ">
                <div class="grid grid-cols-8 ">
                    {{-- Create --}}
                    <div class="col-span-7 space-y-6">
                        <x-form action="{{ route('threads.store') }}">
                            <div class="space-y-8">
                                {{-- Title --}}
                                <div class=" w-full h-auto bg-custom p-2 rounded-lg ">
                                    <x-form.label for="title" value="{{ __('Title') }}" />
                                    <x-form.input id="title" class="block w-full mt-1" type="text" name="title" :value="old('title')" required autofocus />
                                    <x-form.error for="title" />
                                </div>
                                {{-- Category --}}
                                <div class="w-full h-auto bg-custom p-2 rounded-lg">
                                    <x-form.label for="category" value="{{ __('Category') }}" />
                                    <select name="category" id="category" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                        <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                            <option value="{{$category->id()}}">{{$category->name()}}</option>
                                    @endforeach
                                    </select>
                                    <x-form.error for="category" />
                                </div>

                                {{-- Tags --}}
                                <div class="w-full h-auto bg-custom p-2 rounded-lg">
                                    <x-form.label for="tags" value="{{ __('Tags') }}" />
                                    <select name="tags[]" id="tags" x-data="{}" x-init="function () { choices($el) }" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring focus:ring-border-gray-500 focus:ring-opacity-50" multiple>
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id()}}">{{$tag->name()}}</option>
                                        @endforeach
                                    </select>
                                    <x-form.error for="tag" />
                                </div>
                                {{-- Body --}}

                                <div class="w-full h-auto bg-custom p-2 rounded-lg">
                                    <x-form.label for="body" value="{{ __('Description') }}" />
                                    <x-trix name="body" class="bg-white p-2 rounded-lg" styling="shadow-inner bg-white" />
                                    <x-form.error for="body" />
                                </div>
                                {{-- Button --}}
                                <div>
                                    <x-buttons.primary>
                                        {{ __('Create') }}
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
