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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/main','MainController@index')->name('main.index');
Route::get('/about','AboutController@index')->name('about.index');
Route::get('/contacts','ContactController@index')->name('contact.index');
Route::get('/products', 'ProductController@index')->name('post.index'); 
Route::get('/products/create', 'ProductController@create')->name('post.create');
Route::post('/products/create', 'ProductController@store')->name('post.store');
Route::get('/products/{post}', 'ProductController@show')->name('post.show');
Route::get('/products/{post}/edit', 'ProductController@edit')->name('post.edit');
Route::patch('/products/{post}', 'ProductController@update')->name('post.update');
Route::delete('/products/{post}', 'ProductController@destroy')->name('post.delete');


