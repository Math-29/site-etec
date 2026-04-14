<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuscaController;

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::get('/vestibulinho', function(){
    return view('vestibulinho');
})->name('vestibulinho');

Route::get('/cursos', function(){
    return view('cursos');
})->name('cursos');

Route::get('/sugestoes', [
    BuscaController::class, 'sugestoes'
])->name('sugestoes');