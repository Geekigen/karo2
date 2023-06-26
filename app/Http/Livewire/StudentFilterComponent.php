<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Routing\Route;
use Livewire\Component;

class StudentFilterComponent extends Component
{
    
    public $adm;

    public function render()
    {
        $students = Student::when($this->adm, function ($query) {
            return $query->where('adm', $this->adm);
        })->get();

        return view('livewire.student-filter-component', [
            'students' => $students,
        ]);
    }

    public function viewStudentDetails($id)
    {
        $student = Student::findOrFail($id);
        $url = route('students.show', ['id' => $student->id]);
    
        return redirect($url);
    }
    
}
