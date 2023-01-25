<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiKeluargaController;

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


Route::get('/', [ApiKeluargaController::class, 'index'] );

Route::get('/create', [ApiKeluargaController::class, 'create'] );
Route::post('/create', [ApiKeluargaController::class, 'store'] );

Route::get('/update/{id}', [ApiKeluargaController::class, 'edit'] );
Route::post('/update/{id}', [ApiKeluargaController::class, 'update'] );

Route::get('/delete/{id}', [ApiKeluargaController::class, 'destroy'] );
