<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dolgozok', [WorkerController::class, 'index']);
Route::get('/dolgozok/{id}', [WorkerController::class, 'show']);
Route::post('/dolgozok/create', [WorkerController::class, 'create']);
Route::put('/dolgozok/{worker}/edit', [WorkerController::class, 'update']);
Route::delete('/dolgozok/{worker}/delete', [WorkerController::class, 'delete']);
