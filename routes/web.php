<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Models\Company;

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
Route::get('search_data',[EmployeeController::class, 'search_data']);

Route::get('/', function () {
    return view('welcome');
});



Route::get('admin',[AdminController::class,'admin']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// web.php

Route::resource('companies', CompanyController::class);
Route::resource('employees', EmployeeController::class);
// Route::resource('companies', 'CompanyController');
// Route::resource('employees', 'EmployeeController');
// Route to display the form for creating a new employee
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');

// Route to store a new employee in the database
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');

// Route to display a list of employees
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

// Route to display the form for editing an employee
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');

// Route to update an existing employee in the database
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');

// Route to delete an employee from the database
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');

// Route to store a new employee in the database
Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');

// Route to display a list of employees
Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');

// Route to display the form for editing an employee
Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');

// Route to update an existing employee in the database
Route::put('/companies/{company}', [CompanyController::class, 'update'])->name('companies.update');

// Route to delete an employee from the database
Route::delete('/companies/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');
