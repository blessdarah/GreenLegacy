<x-guest-layout>
<div class="bg-gray-100 w-full py-32 px-20 lg:px-48"
    style="background: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.wPzKkAoaWi0Sy8akAKZukAHaEC%26pid%3DApi&f=1&ipt=c7f0212d39e7f46911db15f555d19025d34f62f9c77745b6deefbdb3cb2d9faa&ipo=images')">
    <h3 class="text-white text-6xl font-bold flex items-center"><span class="inline-block w-10 h-1 bg-white mr-3"></span>Our services</h3>
    <p class="text-white my-3 font-semibold">We keep updating everyday</p>
</div>


<div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl">
    <div>
      <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-orange-900 uppercase rounded-full bg-orange-400">Our services</p>
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
        <span class="relative">We</span>
      </span>
      our invested in making things better
    </h2>
  </div>
  </div>
</div>

{{-- services --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-8 row-gap-5 mb-8 lg:grid-cols-3 lg:row-gap-8">
    @foreach($services as $service)
    <div>
      <img class="object-cover w-full h-56 mb-6 rounded shadow-lg md:h-64 xl:h-80" src="{{$service->imageUrl()}}" alt="" />
      <a href="{{$service->serviceUrl()}}" class="mb-2 text-xl font-bold leading-none sm:text-2xl">
        {{$service->name}}
      </a>
      <p class="text-gray-700">
        {{$service->summary}}
      </p>
    </div>
    @endforeach
  </div>
</div>

{{-- call to action hidden by default --}}
<div class="hidden px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="flex flex-col lg:flex-row">
    <div class="max-w-xl pr-16 mx-auto mb-10">
      <h5 class="mb-6 text-3xl font-extrabold leading-none">
        Why you should work with us
      </h5>
      <p class="mb-6 text-gray-900">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae. Sed ut unde omnis iste natus.
      </p>
      <div class="flex items-center">
        <button
          type="submit"
          class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-orange-600 hover:bg-green-700 focus:shadow-outline focus:outline-none"
        >
          Get started
        </button>
        <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-gray-600 hover:text-deep-purple-800">Learn more</a>
      </div>
    </div>
    <div class="grid gap-5 row-gap-5 sm:grid-cols-2">
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-green-50">
          <svg class="w-12 h-12 text-green-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">The deep ocean</h6>
        <p class="text-sm text-gray-700">
          A flower in my garden, a mystery in my panties. Heart attack never stopped old Big Bear. I didn't even know we were calling him Big Bear.
        </p>
      </div>
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-green-50">
          <svg class="w-12 h-12 text-green-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">When has justice</h6>
        <p class="text-sm text-gray-700">
          Rough pomfret lemon shark plownose chimaera southern sandfish kokanee northern sea robin Antarctic cod. Yellow-and-black triplefin.
        </p>
      </div>
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-green-50">
          <svg class="w-12 h-12 text-green-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">Organically grow</h6>
        <p class="text-sm text-gray-700">
          A slice of heaven. O for awesome, this chocka full cuzzie is as rip-off as a cracker. Meanwhile, in behind the bicycle shed, Hercules.
        </p>
      </div>
      <div class="max-w-md">
        <div class="flex items-center justify-center w-16 h-16 mb-4 rounded-full bg-green-50">
          <svg class="w-12 h-12 text-green-400" stroke="currentColor" viewBox="0 0 52 52">
            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
          </svg>
        </div>
        <h6 class="mb-2 font-semibold leading-5">A slice of heaven</h6>
        <p class="text-sm text-gray-700">
          Disrupt inspire and think tank, social entrepreneur but preliminary thinking think tank compelling. Inspiring, invest synergy capacity.
        </p>
      </div>
    </div>
  </div>
</div>

{{-- Frequently asked questions --}}
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <div>
        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-orange-900 uppercase rounded-full bg-orange-400">
          FAQs
        </p>
      </div>
      <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
            <defs>
              <pattern id="70326c9b-4a0f-429b-9c76-792941e326d5" x="0" y="0" width=".135" height=".30">
                <circle cx="1" cy="1" r=".7"></circle>
              </pattern>
            </defs>
            <rect fill="url(#70326c9b-4a0f-429b-9c76-792941e326d5)" width="52" height="24"></rect>
          </svg>
          <span class="relative">Ask</span>
        </span>
        Us whatever you need
      </h2>
      <p class="text-base text-gray-700 md:text-lg">We have gathered a few of our FAQs to read and ask us others is you are not clear</p>
    </div>
  </div>
  <div class="max-w-screen-xl sm:mx-auto">
    <div class="grid grid-cols-1 gap-16 row-gap-8 lg:grid-cols-2">
        @foreach($faqs as $faq)
          <div class="space-y-3">
              <p class="mb-4 text-xl font-medium"> {{$faq->question}} </p>
              <p class="text-gray-700">{{$faq->response}}</p>
          </div>
        @endforeach
    </div>
  </div>
</div>

</x-guest-layout>
