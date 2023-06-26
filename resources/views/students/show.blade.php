<x-app-layout>
    <div>
      <!-- students.show.blade.php -->

<h1>Student Details</h1>
<p>Name: {{ $student->name }}</p>
<p>Grade: {{ $student->grade }}</p>

<h2>Fee Payment Details</h2>
@foreach ($termBalances as $term => $balance)
    <h3>Term: {{ $term }}</h3>
    @if ($balance !== null)
        <p>Total Fee Paid: {{ $student->fees()->where('term', $term)->sum('ammount') }}</p>
        <p>Balance: {{ $balance }}</p>
    @else
        <p>No fee structure found for this term and grade.</p>
    @endif
@endforeach

    </div>
    
</x-app-layout>