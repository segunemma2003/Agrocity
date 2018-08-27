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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/decision', function(){
    return view('forms.decision');
});
Route::post('/decision','HomeController@decision');
Route::get('/farmers/forms', function(){
    return view('forms.form');
});
Route::post('/farmers/forms','FarmersController@store');
Route::get('/farmers/dashboard',function(){
    return view('dashboard.farmers.index');
})->name('farmers.index');
Route::get('/investors/dashboard',function(){
    return view('dashboard.investors.index');
})->name('investors.index');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');