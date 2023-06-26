<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Livewire\FeeForm;
use App\Http\Livewire\FeeStructureComponent;
use App\Http\Livewire\StudentForm;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/fee/portal', FeeForm::class)->name('fee.portal');
    Route::get('/student/portal', StudentForm::class)->name('student.portal');
    Route::get('/structure/portal', FeeStructureComponent::class)->name('structure.portal');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show'); 
});

require __DIR__.'/auth.php';
