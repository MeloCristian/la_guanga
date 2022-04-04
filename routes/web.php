<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('principal.home');
}); 

Route::get('home', function () {
    return view('principal.home');
});

Route::get('userInfo', [HomeController::class, 'getUserInfo'])->middleware('auth');
Route::get('catalog', [CatalogController::class, 'getIndex']);
Route::get('catalog/categoria/{id}', [CatalogController::class, 'getIndexByCategoria']);
Route::get('catalog/show/{id}', [CatalogController::class, 'getShow']);
Route::put('catalog/edit/{id}', [CatalogController::class, 'putEdit']);
Route::get('catalog/edit/{id}', [CatalogController::class, 'getEdit']);
Route::post('catalog/create', [CatalogController::class, 'postCreate']);
Route::delete('catalog/delete/{id}', [CatalogController::class, 'delete']);
Route::get('catalog/create', [CatalogController::class, 'getCreate']);

Route::post('categoria/create', [CategoriaController::class, 'postCreate']);
Route::get('categoria/create', [CategoriaController::class, 'getCreate']);
Route::get('categoria', [CategoriaController::class, 'getIndex']);
Route::get('categoria/edit/{id}', [CategoriaController::class, 'getEdit']);
Route::put('categoria/edit/{id}', [CategoriaController::class, 'putEdit']);



Route::get('/welcome', function () {
    return view('principal.welcome');
});

Route::get('/pagos', function () {
    return view('pagos.show');
});
Auth::routes();
