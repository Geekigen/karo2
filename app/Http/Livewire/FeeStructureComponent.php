<?php

namespace App\Http\Livewire;

use App\Models\FeeStructure;
use Livewire\Component;

class FeeStructureComponent extends Component
{
    public $grade;
    public $term;
    public $amount;

    public $feeStructures;

    public $editMode = false;
    public $editId;

    protected $rules = [
        'grade' => 'required',
        'term' => 'required',
        'amount' => 'required|numeric',
    ];

    public function render()
    {
        $this->feeStructures = FeeStructure::all();

        return view('livewire.fee-structure-component');
    }

    public function saveFeeStructure()
    {
        $this->validate();

        if ($this->editMode) {
            $feeStructure = FeeStructure::findOrFail($this->editId);
            $feeStructure->update([
                'grade' => $this->grade,
                'term' => $this->term,
                'amount' => $this->amount,
            ]);

            $this->editMode = false;
        } else {
            FeeStructure::create([
                'grade' => $this->grade,
                'term' => $this->term,
                'amount' => $this->amount,
            ]);
        }

        $this->resetForm();
    }

    public function editFeeStructure($id)
    {
        $feeStructure = FeeStructure::findOrFail($id);
        $this->editId = $feeStructure->id;
        $this->grade = $feeStructure->grade;
        $this->term = $feeStructure->term;
        $this->amount = $feeStructure->amount;
        $this->editMode = true;
    }

    public function deleteFeeStructure($id)
    {
        FeeStructure::findOrFail($id)->delete();
    }

    private function resetForm()
    {
        $this->grade = '';
        $this->term = '';
        $this->amount = '';
    }
}
