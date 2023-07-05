<?php

namespace App\Http\Livewire;

use App\Models\Expense;
use Livewire\Component;

class ExpenseComponent extends Component
{
    public $expenses;
    public $activity;
    public $date;
    public $amount;
    public $payment_mode;
    public $selectedExpense;

    public function render()
    {
        $this->expenses = Expense::all();

        return view('livewire.expense-component');
    }

    public function createExpense()
    {
        $this->validate([
            'activity' => 'required',
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'payment_mode' => 'required',
        ]);

        Expense::create([
            'activity' => $this->activity,
            'date' => $this->date,
            'amount' => $this->amount,
            'payment_mode' => $this->payment_mode,
        ]);

        $this->resetFields();
    }

    public function editExpense($id)
    {
        $this->selectedExpense = Expense::find($id);
        $this->activity = $this->selectedExpense->activity;
        $this->date = $this->selectedExpense->date;
        $this->amount = $this->selectedExpense->amount;
        $this->payment_mode = $this->selectedExpense->payment_mode;
    }

    public function updateExpense()
    {
        $this->validate([
            'activity' => 'required',
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'payment_mode' => 'required',
        ]);

        if ($this->selectedExpense) {
            $expense = Expense::find($this->selectedExpense->id);
            $expense->update([
                'activity' => $this->activity,
                'date' => $this->date,
                'amount' => $this->amount,
                'payment_mode' => $this->payment_mode,
            ]);
        }

        $this->resetFields();
    }

    public function deleteExpense($id)
    {
        Expense::find($id)->delete();
    }

    private function resetFields()
    {
        $this->activity = '';
        $this->date = '';
        $this->amount = '';
        $this->payment_mode = '';
        $this->selectedExpense = null;
    }
}