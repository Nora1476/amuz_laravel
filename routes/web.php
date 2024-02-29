<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
    //app.blade.php
    return view('home');
});

// Route::get('/message', function () {
//     return view('message');
// });
Route::get('/message', [App\Http\Controllers\Controller::class, "sendMessageForm"])->name('upload.message');
Route::post('/message', [App\Http\Controllers\Controller::class, "sendUploadMessage"])->name('upload.uploadMessage');

Route::get('/credit', function () {
    return view('credit');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
