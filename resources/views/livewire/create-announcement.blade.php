<div>
    <!-- Display success message -->
    @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Form for creating or updating announcements -->
    <form @if ($announcementId) wire:submit.prevent="updateAnnouncement" @else wire:submit.prevent="saveAnnouncement" @endif class="mt-4">
        

        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-bold mb-2">Content:</label>
            <textarea wire:model="content" id="content" class="w-full border border-gray-300 p-2 rounded"></textarea>
            @error('content') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="deadline" class="block text-gray-700 font-bold mb-2">Deadline:</label>
            <input wire:model="deadline" type="date" id="deadline" class="w-full border border-gray-300 p-2 rounded">
            @error('deadline') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Submit button -->
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            @if ($announcementId)
                Update Announcement
            @else
                Create Announcement
            @endif
        </button>
    </form>

    <!-- Display existing announcements -->
    <div class="mt-8">
        <h2 class="font-bold text-lg">Existing Announcements:</h2>
        @foreach ($announcements as $announcement)
            <div class="mt-4 p-4 border border-gray-300 rounded">
                <h3 class="font-bold">{{ $announcement->title }}</h3>
                <p>{{ $announcement->content }}</p>
                <p class="text-sm text-gray-600">Deadline: {{ $announcement->deadline}}</p>
                <div class="mt-2">
                    <button wire:click="editAnnouncement({{ $announcement->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                    <button wire:click="deleteAnnouncement({{ $announcement->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
