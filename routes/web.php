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
Route::get('/message', [App\Http\Controllers\MessageController::class, "sendMessageForm"])->name('message');
// Route::post('/message', [App\Http\Controllers\Controller::class, "sendUploadMessage"])->name('upload.uploadMessage');
Route::post('/message', [App\Http\Controllers\MessageController::class, 'storeMessage'])->name('messages.store');


Route::get('/credit', function () {
    return view('credit');
});



// config/app.php해당 구성 파일에서 공급자 역할을 하는 클래스 확인 가능
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
