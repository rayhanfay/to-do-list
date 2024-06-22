<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);

Route::post('/todo', [TodoController::class, 'store']);

Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');

Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todo.update');

Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');
