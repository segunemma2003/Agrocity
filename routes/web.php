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
	$user=Auth::user();
    return view('forms.form',compact('user'));
})->middleware('auth')->name('farm.request');
Route::post('/farmers/forms','FarmersController@store')->name('farmers.log');
Route::get('/farmers/dashboard',function(){
    return view('dashboard.farmers.index');
})->name('farmers.index');
Route::get('/farmers/dashboard/farms',function(){
    return view('dashboard.farmers.farmers');
})->name('farmers.farms');
Route::get('/farmers/dashboard/invest',function(){
    return view('dashboard.farmers.invest');
})->name('farmers.invest');
Route::get('/investors/dashboard',function(){
    return view('dashboard.investors.index');
})->name('investors.index');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

//admin
Route::get('/admin','AdminController@index')->name('admin.index')->middleware('admin');
Route::get('/admin/users','AdminController@users')->name('admin.users')->middleware('admin');
Route::get('/admin/farmers','AdminController@farmers')->name('admin.farmers')->middleware('admin');

Route::get('/admin/users/{id}/{admin}','AdminController@admin')->name('makeAdmin')->middleware('admin');
Route::get('/admin/users/{id}','AdminController@eachfarmers')->name('farmer.name')->middleware('admin');