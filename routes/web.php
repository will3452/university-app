<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('author/books')->name('author.')->group(function(){
    Route::get('/',[BookController::class, 'index'])->name('bookindex');
    Route::post('/',[BookController::class, 'store'])->name('bookstore');
    Route::get('/create',[BookController::class, 'create'])->name('bookcreate');

});