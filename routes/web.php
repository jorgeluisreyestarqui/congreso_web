<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sumaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});
/*
Route::get('/suma', function () {
    return view('suma');
});
*/
Route::get('/suma', [sumaController::class, 'index']);

Route::post('/suma', [sumaController::class, 'suma']);