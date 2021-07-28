<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('home');
Route::get('/staff', [App\Http\Controllers\HomeController::class, 'staff'])->name('staff');

//Route Admin Pages
Route::get('/report', [App\Http\Controllers\AdminController::class, 'report'])->name('report');
Route::get('/management', [App\Http\Controllers\AdminController::class, 'management'])->name('management');
Route::get('/setting', [App\Http\Controllers\AdminController::class, 'setting'])->name('setting');

// Form
Route::get('/form-depart', [App\Http\Controllers\DepartController::class, 'formDepart']);

//Route Department CRUD
Route::post('/department', [App\Http\Controllers\DepartController::class, 'create'])->name('department');
Route::get('/department/{id}', [App\http\Controllers\DepartController::class, 'edit'])->name('edit-department');
Route::post('/department/edit/{id}', [App\Http\Controllers\DepartController::class, 'update'])->name('update-department');
Route::get('/department/delete/{id}', [App\Http\Controllers\DepartController::class, 'destroy']);


// Route Employee Code
Route::post('/employee', [App\Http\Controllers\EmployeeController::class, 'create'])->name('create');
Route::get('/employee/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('edit-employee');
Route::post('/employee/updates/{id}', [App\Http\Controllers\EmployeeController::class, 'updates']);
Route::get('/employee/destroy/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy']);
