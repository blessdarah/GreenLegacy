<x-guest-layout>
    @foreach($sections as $section)
        <div class="mt-20">
          <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                    <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                        <defs>
                            <pattern id="1d4040f3-9f3e-4ac7-b117-7d4009658ced" x="0" y="0" width=".135" height=".30">
                              <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                        </defs>
                        <rect fill="url(#1d4040f3-9f3e-4ac7-b117-7d4009658ced)" width="52" height="24"></rect>
                    </svg>
              </span>
              {{$section->name}}
            </h2>
            </div>
                <img src="{{asset('storage/' . $section->image)}}" class="rounded-lg my-4 h-32" alt="">
            <div class="prose">{!! $section->body !!}</div>
        </div>
    @endforeach

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <div>
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-orange-900 uppercase rounded-full bg-orange-400">
        Core Team
      </p>
    </div>
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="1d4040f3-9f3e-4ac7-b117-7d4009658ced" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#1d4040f3-9f3e-4ac7-b117-7d4009658ced)" width="52" height="24"></rect>
        </svg>
        <span class="relative">Welcome</span>
      </span>
      our talented team of professionals
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      Everyone is dedicated to the service of the organization
    </p>
  </div>
  <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
@foreach($members as $member)
      <div class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
      @if(isset($member->image))
        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{asset('storage/'. $member->image)}}" alt="Person" />
      @else
        <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="https://www.kindpng.com/picc/m/285-2855863_a-festival-celebrating-tractors-round-profile-picture-placeholder.png" alt="Person" />
      @endif
        <div class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
          <p class="mb-1 text-lg font-bold text-gray-100">{{$member->name}}</p>
          <p class="mb-4 text-xs text-gray-100">{{$member->position}}</p>
          <p class="mb-4 text-xs tracking-wide text-gray-400">{{$member->profile}}</p>
          <div class="flex items-center justify-center space-x-3">

          {{-- twitter --}}
            {{-- <a href="/" class="text-white transition-colors duration-300 hover:text-orange-400"> --}}
            {{--   <svg viewBox="0 0 24 24" fill="currentColor" class="h-5"> --}}
            {{--     <path --}}
            {{--       d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z" --}}
            {{--     ></path> --}}
            {{--   </svg> --}}
            {{-- </a> --}}
            {{----}}
          {{-- facebook --}}
            {{-- <a href="/" class="text-white transition-colors duration-300 hover:text-orange-400"> --}}
            {{--   <svg viewBox="0 0 24 24" fill="currentColor" class="h-5"> --}}
            {{--     <path --}}
            {{--       d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z" --}}
            {{--     ></path> --}}
            {{--   </svg> --}}
            {{-- </a> --}}
          </div>
        </div>
      </div>
@endforeach
  </div>
</div>
</x-guest-layout>