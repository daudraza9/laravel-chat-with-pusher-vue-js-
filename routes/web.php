<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

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
Route::get('/chat',[ChatController::class,'chat']);
Route::post('/deleteSessionsData',[ChatController::class,'deleteSessionsData']);
Route::get('helo', function () {
    dd('func');
});
Route::post('/send',[ChatController::class,'send']);
Route::post('/getOldMessage',[ChatController::class,'getOldMessage']);
Route::post('/saveToSession',[ChatController::class,'saveToSession']);
Route::get('/check', function () {
    return session('chat');
});

// Auth::routes();
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
