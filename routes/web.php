<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\companycontroller as ControllersCompanycontroller;
use App\Http\Controllers\EmployeeController;
use App\Models\Company;
use App\Models\Employee;

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

Route::get('companies',[CompanyController::class, 'index'])->name('companies.index');
Route::get('employees',[EmployeeController::class, 'index'])->name('employees.index');
Route::post('add-employee',[EmployeeController::class,'addEmployee'])->name('addEmployee');
Route::post('add-company',[Companycontroller::class,'addCompany'])->name('addCompany');
Route::post('delete-company',[Companycontroller::class,'destroy']);

//Route::get('/ajax_upload', 'AjaxUploadController@index');


