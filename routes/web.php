<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Livewire\BlogPostComponent;
use App\Http\Livewire\CreateAnnouncement;
use App\Http\Livewire\ExpenseComponent;
use App\Http\Livewire\FeeForm;
use App\Http\Livewire\FeeStructureComponent;
use App\Http\Livewire\StudentFilterComponent;
use App\Http\Livewire\StudentForm;
use App\Models\Anouncement;
use Illuminate\Support\Facades\Route;

use Barryvdh\DomPDF\Facade\Pdf;

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
    $announcements = Anouncement::all();
    return view('welcome', compact('announcements'));
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
    Route::get('/blog', BlogPostComponent::class)->name('blog');
    Route::get('/expenses', ExpenseComponent::class)->name('expenses');
    Route::get('/announcement/portal', CreateAnnouncement::class)->name('announcement.portal');
    Route::get('/student/portal', StudentForm::class)->name('student.portal');
    Route::get('/statement/portal', StudentFilterComponent::class)->name('statement.portal');
    Route::get('/structure/portal', FeeStructureComponent::class)->name('structure.portal');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogd.show');

Route::get('/students/{id}/generate-pdf', [StudentController::class, 'generatePDF'])->name('students.generate_pdf');
 
});

require __DIR__.'/auth.php';
