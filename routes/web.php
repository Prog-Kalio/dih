<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TestMail;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/age', function () {
    return view('age');
});

Route::get('/sponsors', function () {
    return view('sponsors');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/firstpage', [App\Http\Controllers\ProjectController::class, 'firstpage'])->name('firstpage');

Route::get('/send-email', [App\Http\Controllers\MailController::class, 'sendMail']);