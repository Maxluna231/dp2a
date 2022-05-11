<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadoraController;
use Illuminate\Support\Facades\Auth;

Route::resources([
'computadora'   => ComputadoraController::class
]);

Route::get('computadora/datatable',
[ComputadoraController::class,'datatable']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 
[App\Http\Controllers\HomeController::class, 'index'])->name('home');