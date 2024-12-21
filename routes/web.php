<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/CRUD/crear',[UsuariosController::class,'crear'])->name('CRUD.crear');

Route::post('/crear', [UsuariosController::class, 'store'])->name('CRUD.resivir');

Route::put('/crear/{Usuario}', [UsuariosController::class, 'update'])->name('CRUD.update');

Route::delete('/usuarios/{usuario}', [UsuariosController::class, 'destroy'])->name('CRUD.destroy');





