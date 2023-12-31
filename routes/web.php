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

// Despesas Routes 
Route::get('/despesas', [DespesasController::class, 'index'])->name('despesas.index');
Route::get('/despesas/create', [DespesasController::class, 'create'])->name('despesas.create');
Route::post('/despesas/store', [DespesasController::class, 'store'])->name('despesas.store');
Route::post('/despesas/edit/{id}', [DespesasController::class, 'edit'])->name('despesas.edit');
Route::put('/despesas/update', [DespesasController::class, 'update'])->name('despesas.update');
Route::get('/despesas/delete/{id}', [DespesasController::class, 'delete'])->name('despesas.delete');
Route::delete('/despesas/destroy/{id}', [DespesasController::class, 'destroy'])->name('despesas.destroy');

Route::get('/receitas', [ReceitasController::class, 'index'])->name('receitas.index');
Route::get('/investimentos', [InvestimentosController::class, 'index'])->name('investimentos.index');
Route::get('/reservas', [ReservasController::class, 'index'])->name('reservas.index');