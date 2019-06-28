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
    return view('auth.login');
});
Route::get('profile','HomeController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/edit','HomeController@edit');


//Vndor controller-------------------
Route::get('/signup','vendor_controll@signup');
//Route::post('edit','vendor_controll@edit');
Route::get('/edit_profile', 'HomeController@countries')->name('countries');
Route::get('logout','vendor_controll@logout');

Route::get('/signin',function()
{
	return redirect('/');
});

Route::get('register/verify/{token}','Auth\RegisterController@verify'); 

Route::get('/changePassword','HomeController@showChangePasswordForm');
//Route::get('login', function () {
  //  return view('auth.login');



//Admin login ---------------------------------------
Route::get('admin','admin@index');
Route::post('adminlogin','admin@adminlogin');
Route::get('adminhome','admin@vendor_detail');
Route::get('approved/{id}','admin@aPProved');
Route::get('vendor_edit/{id}','admin@vendor_edit');
Route::get('notification/{id}','admin@notification');
