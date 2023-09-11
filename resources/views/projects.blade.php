<x-guest-layout>

<div class="bg-gray-100 w-full py-32 px-20 lg:px-48"
    style="background: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.markhamnotary.com%2Fwp-content%2Fuploads%2F2015%2F11%2Fsection-project-bg.jpg&f=1&nofb=1&ipt=286a819b72e506dff82c9990d612b80e13f84b8848f4dfd5ab79a3aff6c79501&ipo=images')">
    <h3 class="text-white text-6xl font-bold flex items-center"><span class="inline-block w-10 h-1 bg-white mr-3"></span>Our services</h3>
    <p class="text-white my-3 font-semibold">We keep updating everyday</p>
</div>


<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl">
    <div>
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-orange-900 uppercase rounded-full bg-orange-400">Our projects</p>
    </div>
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-green-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="2feffae2-9edf-414e-ab8c-f0e6396a0fc1" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#2feffae2-9edf-414e-ab8c-f0e6396a0fc1)" width="52" height="24"></rect>
        </svg>
        <span class="relative">Our</span>
      </span>
      latest projects
    </h2>
    <p class="text-base text-gray-700 md:text-lg">All the set of projects we are currently working on right now</p>
  </div>
</div>

{{-- services --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-8 row-gap-5 mb-8 lg:grid-cols-3 lg:row-gap-8">
    @foreach($projects as $project)
    <div>
      <img class="object-cover w-full h-56 mb-6 rounded shadow-lg md:h-64 xl:h-80" src="{{asset('storage/'. $project->image)}}" alt="" />
      <a href="{{$project->projectUrl()}}" class="mb-2 text-xl font-bold leading-none sm:text-2xl">
        {{$project->name}}
      </a>
      <p class="text-gray-700">
        {{$project->summary}}
      </p>
    </div>
    @endforeach
  </div>
{{-- Pagination --}}
    <div>{{$projects->links()}}</div>
</div>


</x-guest-layout>
