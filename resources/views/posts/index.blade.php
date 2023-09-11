<x-guest-layout>
<div class="bg-gray-100 w-full py-32 px-20 lg:px-48"
    style="background: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fdeerheadinn.com%2Fwp-content%2Fuploads%2F2013%2F08%2Fblog-bg1.jpg&f=1&nofb=1&ipt=c788569957223c470afca088a974f5c5410d13d130e86f7f0a65f811bfd1c79e&ipo=images')">
    <h3 class="text-white text-6xl font-bold flex items-center"><span class="inline-block w-10 h-1 bg-white mr-3"></span>Blog</h3>
    <p class="text-white my-3 font-semibold">We keep updating everyday</p>
</div>

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="grid gap-5 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
    @foreach($posts as $post)
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded">
      <a href="{{$post->postUrl()}}" aria-label="Article"><img src="{{asset('storage/' . $post->image)}}" class="object-cover w-full h-64 rounded" alt="" /></a>
      <div class="py-5">
        <p class="mb-2 text-xs font-semibold text-gray-600 uppercase">
          {{$post->created_at->format('d M, Y')}}
        </p>
        <a href="{{$post->postUrl()}}" aria-label="Article" class="inline-block mb-3 text-black transition-colors duration-200 hover:text-green-500"><p class="text-2xl font-bold leading-5">{{$post->title}}</p></a>
        <p class="mb-4 text-gray-700">{{Str::words($post->summary, 10)}}</p>
      </div>
    </div>
    @endforeach
  </div>
    <div>
        {{$posts->links()}}
    </div>
</div>
</x-guest-layout>

