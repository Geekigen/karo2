<div class="p-4">
    <form wire:submit.prevent="createPost" class="mb-4">
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title:</label>
            <input wire:model="title" type="text" id="title" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content:</label>
            <textarea wire:model="content" id="content" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
            @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image:</label>
            <input wire:model="image" type="file" id="image" class="mt-1 block">
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600">Create Post</button>
    </form>

    <div>
        <h2 class="text-lg font-medium">All Posts</h2>
        <ul class="mt-4">
            @foreach ($posts as $post)
            <li class="border-b py-4">
                <h3 class="text-xl font-semibold">{{ $post->title }}</h3>
                <p class="mt-2">{{ $post->content }}</p>
                @if ($post->image)
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" width="200" class="mt-4">
                @endif
                <button wire:click="deletePost({{ $post->id }})" class="px-4 py-2 mt-2 bg-red-500 text-white rounded-md hover:bg-red-600">Delete</button>
            </li>
            @endforeach
        </ul>
    </div>
</div>
