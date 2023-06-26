<?php

namespace App\Http\Controllers;

use App\Models\FeeStructure;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show($id)
{
    $student = Student::findOrFail($id);
    $totalPaymentsPerTerm = $student->fees()->selectRaw('term, sum(ammount) as total_payments')->groupBy('term')->get();

    $termBalances = [];

    foreach ($totalPaymentsPerTerm as $totalPayment) {
        $term = $totalPayment->term;
        $totalPayments = $totalPayment->total_payments;

        $feeStructure = FeeStructure::where('grade', $student->grade)
            ->where('term', $term)
            ->first();

        if ($feeStructure) {
            $feeAmount = $feeStructure->amount;
            $balance = $feeAmount - $totalPayments;
        } else {
            $balance = null;
        }

        $termBalances[$term] = $balance;
    }

    return view('students.show', [
        'student' => $student,
        'termBalances' => $termBalances,
    ]);
}


}
