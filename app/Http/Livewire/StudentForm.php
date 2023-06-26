<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Console\View\Components\Component as ComponentsComponent;
use Livewire\Component;

class StudentForm extends Component

{

    public $grade;
    public $name;
    public $adm;
    public $selectedStudent;

    protected $rules = [
        'grade' => 'required',
        'name' => 'required',
        'adm' => 'required|unique:students'
    ];

    public function render()
    {
        $students = Student::all();
        return view('livewire.student-form', compact('students'));
    }

    public function addStudent()
    {
        $this->validate();

        Student::create([
            'grade' => $this->grade,
            'name' => $this->name,
            'adm' => $this->adm
        ]);

        $this->reset();
        $this->emit('studentAdded');
    }

    public function editStudent($studentId)
    {
        $this->selectedStudent = $studentId;
        $student = Student::findOrFail($studentId);

        $this->grade = $student->grade;
        $this->name = $student->name;
        $this->adm = $student->adm;
    }

    public function updateStudent()
    {
        $this->validate();

        $student = Student::findOrFail($this->selectedStudent);
        $student->update([
            'grade' => $this->grade,
            'name' => $this->name,
            'adm' => $this->adm
        ]);

        $this->reset();
        $this->emit('studentUpdated');
    }

    public function deleteStudent($studentId)
    {
        $student = Student::findOrFail($studentId);
        $student->delete();

        $this->emit('studentDeleted');
    }
   
}
