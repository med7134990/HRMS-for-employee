<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('app');
// });

    Route::post('employee/create', [EmployeesController::class, 'create'])->name('employee.create');
    Route::get('/', [EmployeesController::class, 'getEmployees'])->name('employees.index');
    Route::get('employee/create', [EmployeesController::class, 'showEmployeeForm'])->name('showForm');
    Route::delete('employee/{id}', [EmployeesController::class, 'destroy'])->name('delete');
   
    //route that handle updating an employee
    Route::put('employee/{id}', [EmployeesController::class, 'update'])->name('update');
    // Route to show the employee update form
    Route::get('employee/{id}/edit', [EmployeesController::class, 'edit'])->name('employee.edit');
    