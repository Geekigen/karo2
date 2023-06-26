<div>
    <!-- Student Form -->
    <a href="/admin" class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-4 py-2 rounded">Back</a>

    <div class="flex justify-center">
        <!-- Student Form -->
        <div class="w-1/2">
            <form wire:submit.prevent="addStudent" class="mb-4">
                <div class="mb-4">
                    <label for="grade" class="block text-gray-700">Grade:</label>
                    <input type="text" id="grade" wire:model="grade" class="border border-gray-300 rounded px-3 py-2 w-full">
                    @error('grade') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name:</label>
                    <input type="text" id="name" wire:model="name" class="border border-gray-300 rounded px-3 py-2 w-full">
                    @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    <label for="adm" class="block text-gray-700">Admission Number:</label>
                    <input type="text" id="adm" wire:model="adm" class="border border-gray-300 rounded px-3 py-2 w-full">
                    @error('adm') <span class="text-red-500">{{ $message }}</span> @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-4 py-2 rounded">Add Student</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Student List -->
    <table class="w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Grade</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Admission Number</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td class="border px-4 py-2">{{ $student->grade }}</td>
                    <td class="border px-4 py-2">{{ $student->name }}</td>
                    <td class="border px-4 py-2">{{ $student->adm }}</td>
                    <td class="border px-4 py-2">
                        <button wire:click="editStudent({{ $student->id }})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-2 py-1 rounded">Edit</button>
                        <button wire:click="deleteStudent({{ $student->id }})" class="bg-red-500 hover:bg-red-600 text-white font-bold px-2 py-1 rounded">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
