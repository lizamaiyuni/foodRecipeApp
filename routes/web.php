<?php

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

Route::get('/', 'PageController@index')->name('home');
Route::get('/dashboard', 'PageController@dashboard')->name('dashboard');

Route::get('/resep/tambah', 'RecipeController@create')->name('resep.tambah');
Route::post('/resep/simpan', 'RecipeController@store')->name('resep.simpan');
Route::get('/resep/{id}/edit', 'RecipeController@edit')->name('resep.edit');
Route::post('/resep/{id}/update', 'RecipeController@update')->name('resep.update');
Route::get('/resep/{id}/delete', 'RecipeController@destroy')->name('resep.delete');
Route::get('/resep/{id}/like', 'RecipeController@like')->name('resep.like');
Route::get('/resep/{id}', 'RecipeController@show')->name('resep.tampil');
Route::get('/resep/bahan/{string}', 'RecipeController@getBahan')->name('resep.bahan');

Route::get('/user/profil/edit', 'UserController@editProfile')->name('profil.edit');
Route::post('/user/profil/update', 'UserController@updateProfile')->name('profil.update');
Route::get('/user/password/edit', 'UserController@editPassword')->name('password.edit');
Route::post('/user/password/update', 'UserController@updatePassword')->name('password.update');

Auth::routes();
