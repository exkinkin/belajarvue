<?php

use App\Http\Controllers\TransactionController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//get all data
Route::get('/transaction', [TransactionController::class , 'index']);

//post a data
Route::post('/transaction', [TransactionController::class , 'store']);

//update an existing data
Route::put('/transaction/{id}', [TransactionController::class , 'update']);

//show an existing data
Route::get('transaction/{id}', [TransactionController::class, 'show']);

//delete an existing data
Route::delete('/transaction/{id}', [TransactionController::class , 'destroy']);
