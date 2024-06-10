<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
// Rutas para libros
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

// Rutas para préstamos
Route::get('/loans', [LoanController::class, 'index'])->name('loans.index');
Route::get('/loans/create', [LoanController::class, 'create'])->name('loans.create');
Route::post('/loans', [LoanController::class, 'store'])->name('loans.store');
Route::get('/loans/{loan}', [LoanController::class, 'show'])->name('loans.show');

// Ruta para la página de bienvenida
Route::get('/', function () {
    return view('welcome');
})->name('welcome');