<?php

use App\Http\Controllers\{
    UserController
};
use Illuminate\Support\Facades\Route;

Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Rota::método get('endpoint da url', [controller utilizado::class, 'metodo utilizado']) ->name('renomeia a rota');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
// o {id} entre chaves mostra que estou passando um parâmetro dinâmico

Route::get('/', function () {
    return view('welcome');    
});
