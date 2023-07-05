<div class="p-4">
    <input wire:model="adm" type="text" placeholder="Admission Number" class="w-64 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
    
    <table class="mt-4 w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="px-4 py-2 font-medium text-gray-700">Admission Number</th>
                <th class="px-4 py-2 font-medium text-gray-700">Name</th>
                <th class="px-4 py-2 font-medium text-gray-700">Grade</th>
                <th class="px-4 py-2 font-medium text-gray-700">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td class="px-4 py-2">{{ $student->adm }}</td>
                <td class="px-4 py-2">{{ $student->name }}</td>
                <td class="px-4 py-2">{{ $student->grade }}</td>
                <td class="px-4 py-2">
                    <a wire:click="viewStudentDetails({{ $student->id }})" href="#" class="text-blue-500 hover:text-blue-700">Payment Details</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
