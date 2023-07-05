<x-app-layout>
  <h1 class="text-3xl font-bold mb-4"> Posts</h1>
    <div class="flex items-center justify-center h-screen">
     
      @foreach ($posts as $post)
        <article class="max-w-lg overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm"><img
  alt="Office"
  src="{{ $post->image }}"class="h-56 object-cover"
/>

<div class="p-4 sm:p-6">
  <a href="#">
    <h3 class="text-lg font-medium text-gray-900">
      {{ $post->title}}.
    </h3>
  </a>

  <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
    {{ $post->content }}
  </p>

  <a
    href="{{ route('blogd.show', $post->id) }}"
    class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600"
  >
   Read more

    <span
      aria-hidden="true"
      class="block transition-all group-hover:ms-0.5 rtl:rotate-180"
    >
      &rarr;
    </span>
  </a>
</div>
</article>
@endforeach
        </div>

</x-app-layout>