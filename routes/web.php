<?php
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HolaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    Log::info('Error log para rolar 2');
    return view('welcome');
});

Route::resource('/hola', HolaController::class);
//Route::post('/hola', [HolaController::class, 'store']);
