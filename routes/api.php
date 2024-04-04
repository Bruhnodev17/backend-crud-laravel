<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index',[ProdutoController::class,'index'])->name('api.index');
Route::post('/store',[ProdutoController::class,'store'])->name('api.store');
Route::get('/edit/{id}',[ProdutoController::class,'edit'])->name('api.edit');
Route::delete('/delete/{id}',[ProdutoController::class,'destroy'])->name('api.destroy');
Route::put('/update/{id}',[ProdutoController::class,'update'])->name('api.update');
