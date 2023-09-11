<x-guest-layout>
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="df31b9f6-a505-42f8-af91-d2b7c3218e5c" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#df31b9f6-a505-42f8-af91-d2b7c3218e5c)" width="52" height="24"></rect>
        </svg>
        <span class="relative">We</span>
      </span>
      are always excited to hear from you
    </h2>
    <p class="text-base text-gray-700 md:text-lg">Reach us via the following means</p>
  </div>
  <div class="grid gap-8 row-gap-8 lg:grid-cols-3">
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50 sm:mx-auto sm:w-24 sm:h-24">
        <svg class="w-12 h-12 text-deep-green-400 sm:w-20 sm:h-20" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="19 13 10 29 40 29 23 39 20 23"></polygon>
        </svg>
      </div>
      <h6 class="mb-2 font-semibold leading-5">{{__("Address")}}</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        {!! setting('address')!!}
      </p>
    </div>
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50 sm:mx-auto sm:w-24 sm:h-24">
        <svg class="w-12 h-12 text-deep-green-400 sm:w-20 sm:h-20" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
        </svg>
      </div>
      <h6 class="mb-2 font-semibold leading-5">{{__("Contacts")}}</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        {!! setting('phone_numbers') !!}
      </p>
    </div>
    <div class="sm:text-center">
      <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-indigo-50 sm:mx-auto sm:w-24 sm:h-24">
        <svg class="w-12 h-12 text-deep-green-400 sm:w-20 sm:h-20" stroke="currentColor" viewBox="0 0 52 52">
          <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
        </svg>
      </div>
      <h6 class="mb-2 font-semibold leading-5">{{__("Working hours")}}</h6>
      <p class="max-w-md mb-3 text-sm text-gray-900 sm:mx-auto">
        {!! setting('office_hours') !!}
      </p>
    </div>
  </div>
</div>

<div class="w-full lg:w-5/12 mx-auto">
<h3 class="text-5xl font-black text-center text-gray-600 my-6">Or Send us a message</h3>

    @if(Session::has('success'))
        <script type="text/javascript">
            alert('{{Session::get('success')}}');
        </script>
    @endif

    <form action="{{route('pages.contactEmail')}}" method="POST" class="flex flex-col space-y-4">
        @csrf
        <div class="flex flex-col spacy-y-4">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="rounded border border-gray-200">
        </div>
        <div class="flex flex-col spacy-y-4">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="rounded border border-gray-200">
        </div>
        <div class="flex flex-col spacy-y-4">
            <label for="message">Message</label>
            <textarea id="message" name="message" class="rounded border border-gray-200"></textarea>
        </div>

        <button type="submit" class="rounded bg-green-500 text-gray-800 text-center px-2 py-3 font-semibold transition-all duration-300 ease-in-out hover:bg-green-600">Submit</button>

    </form>
</div>


</x-guest-layout>
