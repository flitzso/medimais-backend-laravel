<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\NormalUsersController;
use App\Http\Controllers\CredenciamentoController;

// http://127.0.0.1:8000/api/employees
// Rotas para Employees
Route::prefix('employees')->group(function () {
    Route::get('/', [EmployeeController::class, 'index']);
    Route::post('/', [EmployeeController::class, 'store']);
    Route::get('/{id}', [EmployeeController::class, 'show']);
    Route::put('/{id}', [EmployeeController::class, 'update']);
    Route::delete('/{id}', [EmployeeController::class, 'destroy']);
});

// http://127.0.0.1:8000/api/normal-users
// Rotas para Normal Users
Route::prefix('normal-users')->group(function () {
    Route::get('/', [NormalUsersController::class, 'index']);
    Route::post('/', [NormalUsersController::class, 'store']);
    Route::get('/{id}', [NormalUsersController::class, 'show']);
    Route::put('/{id}', [NormalUsersController::class, 'update']);
    Route::delete('/{id}', [NormalUsersController::class, 'destroy']);
});

// http://127.0.0.1:8000/api/credenciamento
// Rotas para Credenciamento
Route::prefix('credenciamento')->group(function () {
    Route::get('/', [CredenciamentoController::class, 'index']);
    Route::post('/', [CredenciamentoController::class, 'store']);
    Route::get('/{id}', [CredenciamentoController::class, 'show']);
    Route::put('/{id}', [CredenciamentoController::class, 'update']);
    Route::delete('/{id}', [CredenciamentoController::class, 'destroy']);
});

use App\Http\Controllers\AuthController;

// Rotas para autenticação
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
