<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('posts.home');
Route::get('/start', [App\Http\Controllers\SearchController::class, 'search'])-> name('start');
Route::get('/get-result', [App\Http\Controllers\SearchController::class, 'getResult'])-> name('get-result');

Route::resource('posts', 'PostsController@index');
