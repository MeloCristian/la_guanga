<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('principal.home');
}); 

Route::get('home', function () {
    return view('principal.home');
});

Route::get('about', function () {
    return view('principal.about');
});

Route::get('userInfo', [HomeController::class, 'getUserInfo'])->middleware('auth');
Route::get('catalog', [CatalogController::class, 'getIndex']);
Route::get('catalog/categoria/{id}', [CatalogController::class, 'getIndexByCategoria']);
Route::get('catalog/show/{id}', [CatalogController::class, 'getShow']);
Route::put('catalog/edit/{id}', [CatalogController::class, 'putEdit'])->middleware('auth');
Route::get('catalog/edit/{id}', [CatalogController::class, 'getEdit'])->middleware('auth');
Route::post('catalog/create', [CatalogController::class, 'postCreate'])->middleware('auth');
Route::delete('catalog/delete/{id}', [CatalogController::class, 'delete'])->middleware('auth');
Route::get('catalog/create', [CatalogController::class, 'getCreate'])->middleware('auth');

Route::post('categoria/create', [CategoriaController::class, 'postCreate'])->middleware('auth');
Route::get('categoria/create', [CategoriaController::class, 'getCreate'])->middleware('auth');
Route::get('categoria', [CategoriaController::class, 'getIndex'])->middleware('auth');
Route::get('categoria/edit/{id}', [CategoriaController::class, 'getEdit'])->middleware('auth');
Route::put('categoria/edit/{id}', [CategoriaController::class, 'putEdit'])->middleware('auth');
Route::delete('categoria/delete/{id}', [CategoriaController::class, 'delete'])->middleware('auth');

Route::post('cart/{id}', [CatalogController::class, 'addItemStore']);
Route::delete('cart/{id}', [CatalogController::class, 'removeItemCart']);
Route::get('cart', [CatalogController::class, 'getCart']);

Route::post('factura/pdf', [FacturaController::class, 'createPdf']);
Route::get('factura/pagar', [FacturaController::class, 'getForm']);
Route::post('factura/create', [FacturaController::class, 'postCreate']);

Route::get('persona/{id}', [PersonaController::class, 'getPerson']);
Route::post('persona/create', [PersonaController::class, 'postCreate']);

Auth::routes();
