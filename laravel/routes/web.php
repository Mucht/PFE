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

// ******** Front end routes ********
Route::get( '/', 'PageController@home' );
Route::get( 'user/{user}', 'UserController@show' )->name('profil');
Route::get( '/contact', 'PageController@contact' )->name('contact');
Route::get( 'role/', 'RoleController@index' );
Route::get( 'role/{role}', 'RoleController@show' );

// ******** Auth ********
Auth::routes();
Route::get('/connected', 'PageController@connected')->name('connected');
