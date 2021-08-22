<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController as RegisterController;

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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::namespace('Auth')->group(function(){
    Auth::routes();
    Route::get('customer/register', [RegisterController::class, 'index'])->name('customer.register');
    Route::post('test', [RegisterController::class, 'test'])->name('test');

});

