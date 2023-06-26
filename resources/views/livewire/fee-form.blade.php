<div>
    <a href="/admin" class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-4 py-2 rounded">Back </a>

    <!-- Fee Form -->
    <div class="flex justify-center">
        <div class="w-1/2">
    <form wire:submit.prevent="addFee">
        <div class="mb-4">
            <label for="selectedStudent" class="block text-gray-700">Admission Number:</label>
            <input type="text" id="selectedStudent" wire:model.lazy="selectedStudent" class="border border-gray-300 rounded px-3 py-2 w-full" wire:loading.attr="disabled" placeholder="Enter Admission Number">
            @error('selectedStudent') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Student Name:</label>
            <input type="text" class="border border-gray-300 rounded px-3 py-2 w-full" readonly value="{{ $studentName }}">
        </div>
        <div class="mb-4">
            <label for="term" class="block text-gray-700">Term:</label>
            <input type="text" id="term" wire:model.lazy="term" class="border border-gray-300 rounded px-3 py-2 w-full" wire:loading.attr="disabled" placeholder="Enter Term">
            @error('term') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700">Status:</label>
            <select id="status" wire:model.lazy="status" class="border border-gray-300 rounded px-3 py-2 w-full" wire:loading.attr="disabled">
                <option value="">Select Status</option>
                <option value="Complete">Complete</option>
                <option value="Has Balance">Has Balance</option>
            </select>
            @error('status') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="ammount" class="block text-gray-700">Amount:</label>
            <input type="text" id="ammount" wire:model.lazy="ammount" class="border border-gray-300 rounded px-3 py-2 w-full" wire:loading.attr="disabled" placeholder="Enter Amount">
            @error('ammount') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            <label for="balance" class="block text-gray-700">Balance:</label>
            <input type="text" id="balance" wire:model.lazy="balance" class="border border-gray-300 rounded px-3 py-2 w-full" wire:loading.attr="disabled" placeholder="Enter Balance">
            @error('balance') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-4 py-2 rounded" wire:loading.attr="disabled">Add Fee</button>
        </div>
    </form>
</div>
</div>
    <!-- Fee List -->
    <table class="w-full border mt-6">
        <thead>
            <tr>
                <th class="border px-4 py-2">Student</th>
                <th class="border px-4 py-2">Term</th>
                <th class="border px-4 py-2">Ammount</th>
                <th class="border px-4 py-2">Balance</th>
                <th class="border px-4 py-2">Status</th>
                <th class="border px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fees as $fee)
                <tr>
                    <td class="px-4 py-2">{{ $fee->student->name }}</td>
                    <td class="px-4 py-2">{{ $fee->term }}</td>
                    <td class="px-4 py-2">{{ $fee->ammount}}</td>
                    <td class="px-4 py-2">{{ $fee->balance }}</td>
                    <td class="px-4 py-2">{{ $fee->status }}</td>
                    <td class="px-4 py-2">
                        <button wire:click="editFee({{ $fee->id }})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold px-4 py-2 rounded">Edit</button>
                        <button wire:click="deleteFee({{ $fee->id }})" class="bg-red-500 hover:bg-red-600 text-white font-bold px-4 py-2 rounded">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
