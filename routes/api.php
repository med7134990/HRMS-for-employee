<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('employee', [EmployeesController::class, 'apigetEmployees'])->name('api.getEmployees');
//This route can be used by JavaScript (e.g., DataTables) to fetch data dynamically.