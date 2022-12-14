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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::match(["GET","post"],"/register", function(){
    return redirect('login');
});


// control

Route::resource('user','UserController');
Route::resource('program','ProgramController');
Route::resource('acara','AcaraController');

// end control



Route::view('tampil', 'layouts.template');

