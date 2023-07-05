<x-app-layout>
<section>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
      <div class="max-w-3xl">
        <h2 class="text-3xl font-bold sm:text-4xl">
            {{ $post->title }}
        </h2>
      </div>
  
      <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
        <div class="relative h-64 overflow-hidden sm:h-80 lg:h-full">
          <img
            alt="Party"
            src="{{ $post->image }}"
            class="absolute inset-0 h-full w-full object-cover"
          />
        </div>
  
        <div class="lg:py-16">
          <article class="space-y-4 text-gray-600">
            <p>{{ $post->content}}
            </p>
          </article>
          <a
          href="/blogs"
          class="mt-8 inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
        >
         Back to blogs
        </a>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>