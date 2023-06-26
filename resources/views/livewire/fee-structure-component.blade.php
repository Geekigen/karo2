<div class="p-4">
    <form wire:submit.prevent="saveFeeStructure" class="mb-8">
        <div class="mb-4">
            <label for="grade" class="block mb-1 font-semibold">Grade:</label>
            <input type="text" wire:model.defer="grade" id="grade" class="w-full px-4 py-2 border border-gray-300 rounded" required>
            @error('grade') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="term" class="block mb-1 font-semibold">Term:</label>
            <input type="text" wire:model.defer="term" id="term" class="w-full px-4 py-2 border border-gray-300 rounded" required>
            @error('term') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="amount" class="block mb-1 font-semibold">Amount:</label>
            <input type="number" step="0.01" wire:model.defer="amount" id="amount" class="w-full px-4 py-2 border border-gray-300 rounded" required>
            @error('amount') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
            {{ $editMode ? 'Update' : 'Save' }}
        </button>
        @if ($editMode)
            <button type="button" wire:click="resetForm" class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600 ml-2">Cancel</button>
        @endif
    </form>

    <table class="w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 font-semibold">Grade</th>
                <th class="px-4 py-2 font-semibold">Term</th>
                <th class="px-4 py-2 font-semibold">Amount</th>
                <th class="px-4 py-2 font-semibold">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($feeStructures as $feeStructure)
                <tr>
                    <td class="px-4 py-2">{{ $feeStructure->grade }}</td>
                    <td class="px-4 py-2">{{ $feeStructure->term }}</td>
                    <td class="px-4 py-2">{{ $feeStructure->amount }}</td>
                    <td class="px-4 py-2">
                        <button wire:click="editFeeStructure({{ $feeStructure->id }})" class="px-2 py-1 text-white bg-blue-500 rounded hover:bg-blue-600">Edit</button>
                        <button wire:click="deleteFeeStructure({{ $feeStructure->id }})" class="px-2 py-1 text-white bg-red-500 rounded hover:bg-red-600 ml-2">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
