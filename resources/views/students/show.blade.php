<x-app-layout>
    <div class="p-4">
        <h1 class="text-xl font-bold">Student Details</h1>
        <p class="mt-2">Name: {{ $student->name }}</p>
        <p>Grade: {{ $student->grade }}</p>
    
        <h2 class="text-xl font-bold mt-4">Fee Payment Details</h2>
        <table class="mt-2 w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-gray-200">Term</th>
                    <th class="py-2 px-4 bg-gray-200">Total Fee Paid</th>
                    <th class="py-2 px-4 bg-gray-200">Balance</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($termBalances as $term => $balance)
                <tr>
                    <td class="py-2 px-4">{{ $term }}</td>
                    @if ($balance !== null)
                    <td class="py-2 px-4">{{ $student->fees()->where('term', $term)->sum('ammount') }}</td>
                    <td class="py-2 px-4">{{ $balance }}</td>
                    @else
                    <td class="py-2 px-4" colspan="2">No fee structure found for this term and grade.</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex justify-end mt-4">
            <a href="/students/{{ $student->id}}/generate-pdf"  rel="noopener noreferrer" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Download statement<iconify-icon icon="teenyicons:pdf-solid"></iconify-icon></a>
        </div>
    </div>
    
</x-app-layout>