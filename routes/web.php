<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//Rotas de cadastro de usuario
Route::get('/cadastro_usuario', [UserController::class,"formCriarUsuario"]);

Route::get('/listar_usuario', [UserController::class, 'listar']);

Route::post('/criar_usuario', [UserController::class, 'criar']);


//rotas para cliente

Route::get('/cadastro_cliente', [ClienteController::class,"formCliente"]);


Route::get('/listar_cliente', [ClienteController::class, 'listar']);


Route::post('/criar_cliente', [ClienteController::class, 'criar']);


