<x-guest-layout>
    <main class="grid grid-cols-4 gap-8 mt-8 wrapper">

        <x-partials.sidenav />

        <section class="flex flex-col col-span-3 gap-y-4">
            <small class="text-sm text-gray-400">discussion>create</small>

            <article class="p-5 ">
                <div class="grid grid-cols-8 ">

                    {{-- Create --}}
                    <div class="col-span-7 space-y-6">
                        <x-form action="#">
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
                                        <option value="">Category One</option>
                                        <option value="">Category One</option>
                                        <option value="">Category One</option>
                                        <option value="">Category One</option>
                                    </select>
                                    <x-form.error for="category" />
                                </div>

                                {{-- Body --}}
                                
                                <div class="w-full h-auto bg-custom p-2 rounded-lg">
                                    <x-form.label for="body" value="{{ __('Description') }}" />
                                    <x-trix name="about" class="bg-white p-2 rounded-lg" styling="shadow-inner bg-white" />
                                </div>

                                {{-- Button --}}
                                <x-buttons.primary>
                                    {{ __('Create') }}
                                </x-buttons.primary>
                        </x-form>
                    </div>
                </div>
            </article>
        </section>
    </main>
</x-guest-layout>
