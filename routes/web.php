<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\{DespesasController,
    HomeController,
    InvestimentosController,
    ReceitasController,
    ReservasController};



/* Landing page */ 
Route::get('/', [IndexController::class, 'index'])->name('index.home');


/*Middleware Auth */
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/despesas', [DespesasController::class, 'index'])->name('despesas.index');
Route::get('/receitas', [ReceitasController::class, 'index'])->name('receitas.index');
Route::get('/investimentos', [InvestimentosController::class, 'index'])->name('investimentos.index');
Route::get('/reservas', [ReservasController::class, 'index'])->name('reservas.index');