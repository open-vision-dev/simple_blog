<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminCheck;
;
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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news','NewsController@index')->name('news.index');
Route::get('/news/{index}','NewsController@show')->name('news.show');
Route::post('/news/store','NewsController@store')->name('news.store');
Route::delete('/news/{id}/delete','NewsController@delete')->name('news.delete');

Route::get('/posts/','PostsController@index')->name('posts.index');

Route::get('/posts/create/','PostsController@create')->name('posts.create')->middleware(['web','admin_check']);
Route::get('/posts/{index}/show','PostsController@show')->name('posts.show');
Route::post('/posts/store/','PostsController@store')->name('posts.store');
Route::post('/posts/{id}/','PostsController@update')->name('posts.update');
Route::delete('/posts/{id}','PostsController@delete')->name('posts.delete');

Route::get('/errors/',function(){
    return view('error');
})->name('errors');