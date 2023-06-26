<?php

namespace App\Http\Livewire;

use App\Models\Fee;
use App\Models\Student;
use Livewire\Component;

class FeeForm extends Component
{
   
    public $selectedStudent = '';
    public $term;
    public $status;
    public $studentName = '';
    public $ammount;
    public $balance;

    protected $rules = [
        'selectedStudent' => 'required',
        'term' => 'required',
        'status' => 'required',
        'ammount' => 'required',
        'balance' => 'required'
    ];

    public function render()
    {
        $students = Student::all();
        $fees = Fee::all();

        return view('livewire.fee-form', compact('students', 'fees'));
    }

    public function updatedSelectedStudent()
    {
        $student = Student::where('adm', $this->selectedStudent)->first();
        $this->studentName = $student ? $student->name : '';
    }

    public function addFee()
    {
        $this->validate();

        Fee::create([
            'adm' => $this->selectedStudent,
            'term' => $this->term,
            'status' => $this->status,
            'ammount' => $this->ammount,
            'balance' => $this->balance
        ]);

        $this->reset();
        $this->emit('feeAdded');
    }

    public function editFee($feeId)
    {
        $fee = Fee::findOrFail($feeId);

        $this->selectedStudent = $fee->adm;
        $this->term = $fee->Term;
        $this->status = $fee->status;
        $this->ammount = $fee->ammount;
        $this->balance = $fee->balance;
    }

    public function updateFee()
    {
        $this->validate();

        $fee = Fee::findOrFail($this->selectedStudent);
        $fee->update([
            'term' => $this->term,
            'status' => $this->status,
            'ammount' => $this->ammount,
            'balance' => $this->balance
        ]);

        $this->reset();
        $this->emit('feeUpdated');
    }

    public function deleteFee($feeId)
    {
        $fee = Fee::findOrFail($feeId);
        $fee->delete();

        $this->emit('feeDeleted');
    }
}
