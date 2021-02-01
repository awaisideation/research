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
    return view('layouts.index');

});

//Route::get('register', function () {
//    return view('main.register');
//
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::post('register', 'RegisterController@validator')->name('register');
Route::get('/register', 'Auth\AuthController@register')->name('register');
Route::post('/register', 'Auth\AuthController@storeUser');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/card', 'Auth\AuthController@card');

});


Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/login', 'Auth\AuthController@authenticate');
Route::get('logout', 'Auth\AuthController@logout')->name('logout');

Route::get('/admins', 'CollabController@index')->name('index');
Route::get('/admins/edit{id}', 'CollabController@edit')->name('collab.edit');
Route::put('/admins/edit', 'CollabController@update')->name('collab.update');


Route::get('/admins/create', 'CollabController@create')->name('create.collab');
Route::post('/admins/create', 'CollabController@store')->name('collab.create');
Route::delete('/admins//{id}', 'CollabController@destroy')->name('collab.destroy');

