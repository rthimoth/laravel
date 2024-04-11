@if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
<button class="flex bg-white p-2 items-center transition border-2 border-transparent rounded-3xl focus:outline-none focus:border-gray-300">
    {{-- <img class="object-cover shrink-0 
    h-6 w-6 " src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --}}
    <img class="object-cover shrink-0 
    h-6 w-6 " src="{{ asset('img/avatars/person1.png') }}" alt="Person One" />
</button>
@else
<span class="inline-flex rounded-md">
    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none">
        {{ Auth::user()->name }}
    </button>
</span>
@endif
