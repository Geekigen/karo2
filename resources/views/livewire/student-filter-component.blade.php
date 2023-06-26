<div>
    <input wire:model="adm" type="text" placeholder="Admission Number">
    
    <table>
        <thead>
            <tr>
                <th>Admission Number</th>
                <th>Name</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->adm }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->grade }}</td>
                <td><a wire:click="viewStudentDetails({{ $student->id }})" href="#">View Details</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

