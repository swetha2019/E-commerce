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
Route::get('admin',['uses'=>'admin\admin_controller@index']);
Route::post('adminlogin','admin\admin_controller@adminlogin');
Route::get('adminhome','admin\admin_controller@vendor_detail');
Route::get('approved/{id}','admin\admin_controller@aPProved');//for activate the the vendores
Route::get('vendor_edit/{id}','admin\admin_controller@vendor_edit');
Route::get('notification/{id}','admin\admin_controller@notification');
Route::get('admin_edit/{id}','admin\admin_controller@admin_edit')->name('admin_edit');
Route::post('admin_update/{id}','admin\admin_controller@admin_update');//for update admin detail
Route::post('admin_change_password/{id}','admin\admin_controller@admin_change_password');
Route::get('Vendor_Delete/{id}','admin\admin_controller@Vendor_Delete');

Route::post('/search','admin\admin_controller@search');

Route::get('admin_logout','admin\admin_controller@admin_logout');



