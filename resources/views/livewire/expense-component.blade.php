<div class="p-8 bg-gray-100">
    <form wire:submit.prevent="{{ $selectedExpense ? 'updateExpense' : 'createExpense' }}" class="max-w-md mx-auto bg-white shadow-lg rounded-lg px-6 py-8">
        <div class="mb-6">
            <label for="activity" class="block text-gray-700 text-sm font-bold mb-2">Activity:</label>
            <input wire:model="activity" type="text" id="activity" required
                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring focus:ring-blue-500">
            @error('activity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
            <input wire:model="date" type="date" id="date" required
                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring focus:ring-blue-500">
            @error('date') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Amount:</label>
            <input wire:model="amount" type="number" step="0.01" id="amount" required
                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring focus:ring-blue-500">
            @error('amount') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-6">
            <label for="payment_mode" class="block text-gray-700 text-sm font-bold mb-2">Payment Mode:</label>
            <input wire:model="payment_mode" type="text" id="payment_mode" required
                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring focus:ring-blue-500">
            @error('payment_mode') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end space-x-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-200">Save</button>
            <button type="button" wire:click="resetFields" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition-colors duration-200">Reset</button>
        </div>
    </form>

    <table class="mt-8 bg-white shadow-lg rounded-lg overflow-hidden">
        <thead>
            <tr>
                <th class="py-3 px-4 bg-gray-200 text-gray-700 font-bold uppercase">Activity</th>
                <th class="py-3 px-4 bg-gray-200 text-gray-700 font-bold uppercase">Date</th>
                <th class="py-3 px-4 bg-gray-200 text-gray-700 font-bold uppercase">Amount</th>
                <th class="py-3 px-4 bg-gray-200 text-gray-700 font-bold uppercase">Payment Mode</th>
                <th class="py-3 px-4 bg-gray-200 text-gray-700 font-bold uppercase"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expenses as $expense)
                <tr>
                    <td class="py-4 px-6 border-b">{{ $expense->activity }}</td>
                    <td class="py-4 px-6 border-b">{{ $expense->date }}</td>
                    <td class="py-4 px-6 border-b">{{ $expense->amount }}</td>
                    <td class="py-4 px-6 border-b">{{ $expense->payment_mode }}</td>
                    <td class="py-4 px-6 border-b">
                        <button wire:click="editExpense({{ $expense->id }})" class="text-blue-500 hover:underline">Edit</button>
                        <button wire:click="deleteExpense({{ $expense->id }})" class="text-red-500 hover:underline">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
