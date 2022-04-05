<?php

use App\Http\Controllers\APIArticulosController;
use App\Http\Controllers\APIFacturasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Factura;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/facturas', [APIFacturasController::class,'getAll'])->middleware('auth.basic.once');
Route::get('v1/factura/{id}', [APIFacturasController::class,'getFactura'])->middleware('auth.basic.once');

Route::get('v1/articulos', [APIArticulosController::class,'getAll']);
Route::get('v1/articulo/{id}', [APIArticulosController::class,'getArticulo']);
Route::post('v1/articulo', [APIArticulosController::class,'postArticulo'])->middleware('auth.basic.once');
Route::put('v1/articulo/updateExistencias', [APIArticulosController::class,'updateExistencias']);
