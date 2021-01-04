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

/*Route::get('/', function () {
    return view('welcome');
    //return 'Hello World';
});
*/

Route::get('/', "App\Http\Controllers\PagesController@index" );
Route::get('/about', "App\Http\Controllers\PagesController@about" );
Route::get('/services', "App\Http\Controllers\PagesController@services" );



/*Route::get('/hello', function () {
    return "<h1>Hello World</h1>";
});

Route::get('/about', function () {
    return view("Pages.about");
});
*/

Route::get('/users/{id}', function ($id) {
    return "This is a user " . $id;
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('post', App\Http\Controllers\PostsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::post("/comments/{$post_id}", [App\Http\Controllers\CommentsController::class], 'store') ->name('comments.store');
