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
Route::get('/', 'user_controll\UserController@product_view')->name('product_view');
Route::get('/vendor', function () {
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




//--------------------------Admin login ---------------------------------------
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

//user edit page-->
Route::get('adminuser_form','admin\admin_controller@adminuser_form');
route::post('add_user','admin\admin_controller@add_user');
Route::get('adminuser_edit/{id}','admin\admin_controller@adminuser_edit');
Route::post('edit_admin_user/{id}','admin\admin_controller@edit_admin_user');
Route::get('admin_logout','admin\admin_controller@admin_logout');
//Route::get('getmsg','controller@getmsg');
Route::get('view_user','admin\admin_controller@view_user');
Route::get('adminuser_delete/{id}','admin\admin_controller@adminuser_delete');

//--category---------------------
Route::get('categories_form','admin\admin_controller@categories_form');//for display the categories
Route::get('add_category',function()
{
	return view('Admin.add_category');
});
Route::post('add_categories','admin\admin_controller@add_categories');//add categories
Route::get('add_subcategory','admin\admin_controller@add_subcategory');
Route::post('add_subcategories','admin\admin_controller@add_subcategories');//for adding sub categories
Route::get('Catgory_delete/{id}','admin\admin_controller@Catgory_delete');
Route::get('catgory_edit/{id}','admin\admin_controller@catgory_edit');
Route::get('sub_category_delete/{id}','admin\admin_controller@sub_category_delete');
Route::get('sub_category_edit/{id}','admin\admin_controller@sub_category_edit');
Route::post('upadet_subcategories/{id}','admin\admin_controller@upadet_subcategories');
//Route::post('/search','admin\admin_controller@search');
Route::get('add_Childcategory','admin\admin_controller@add_Childcategory');
Route::get('add_Childcategory2','admin\admin_controller@add_Childcategory2');
Route::post('childcategorytwo','admin\admin_controller@childcategorytwo');
Route::get('back','admin\admin_controller@back');
Route::get('subcategory_select','admin\admin_controller@subcategory_select');
Route::post('childcategory','admin\admin_controller@childcategory');
Route::get('new_vendor','admin\admin_controller@new_vendor');
Route::get('rect_vendor','admin\admin_controller@rect_vendor');
Route::get('child_select','admin\admin_controller@child_select');
Route::post('update_categories/{id}','admin\admin_controller@update_categories');

//vendor routes
Route::get('/delete','HomeController@delete');
Route::get('/logout','HomeController@logout')->name('logout');
Route::get('/edit_profile', 'HomeController@countries')->name('countries');
Route::get('/district','HomeController@district')->name('district');
Route::post('/subscription','HomeController@subscription');
Route::post('/get_subscription','PaymentController@get_subscription');
Route::get('/pg_redirect','PaymentController@pg_redirect');

// Route::get('test',function()
// {
// 	return view('test');
// });
// Route::post('multi','controller@multi');
// Route::get('disp','controller@diso');



//------------------prodct---------------------------------------------------
Route::get('product','admin\admin_controller@product');
Route::get('product_delete/{id}','admin\admin_controller@product_delete');
Route::get('product_detail/{id}','admin\admin_controller@product_detail');

Route::get('subscription','admin\admin_controller@subscription');
Route::get('subscription_delete/{id}','admin\admin_controller@subscription_delete');
// Route::get('product_detail/{id}','admin\admin_controller@product_detail');
Route::post('pro_edit/{id}','PaymentController@pro_edit');

//--------------home controller--------------------------------------
Route::post('/edit','HomeController@edit');
//Route::post('/subscribe','HomeController@subscribe');
Route::get('/delete','HomeController@delete');
Route::get('/logout','HomeController@logout')->name('logout');
Route::get('/edit_profile', 'HomeController@countries')->name('countries');
Route::get('/district','HomeController@district')->name('district');
Route::post('/subscription','HomeController@subscription');
Route::get('/change_password','HomeController@change_password')->name('change_password');
Route::post('/update_password','HomeController@update_password');

Route::post('/get_subscription','PaymentController@get_subscription');
Route::get('/pg_redirect','PaymentController@pg_redirect');

Route::get('/add_redirect','ProductController@add_redirect');
Route::post('/add_product','ProductController@add_product');
Route::post('/add_category','ProductController@add_category');
Route::post('/add_sub_category','ProductController@add_sub_category');
Route::post('/add_new_sub_category','ProductController@add_new_sub_category');
Route::get('/product_delete/{id}','ProductController@product_delete');
Route::post('/category','ProductController@category');
Route::get('/sub_category','ProductController@sub_category')->name('sub_category');
Route::get('/child_category1','ProductController@child_category1')->name('child_category1');
Route::get('/child_category2','ProductController@child_category2')->name('child_category2');
Route::post('/update_image','ProductController@update_image');

Route::get('/view_product','ProductController@view_product');
Route::get('/delete_product/{id}','ProductController@delete_product');
Route::get('/edit_product/{id}','ProductController@edit_product')->name('edit_product');
Route::get('/product_image_view/{id}','ProductController@product_image_view')->name('product_image_view');
Route::get('/view_product_details/{id}','ProductController@view_product_details')->name('view_product_details');
Route::post('/update_product','ProductController@update_product');
Route::get('/product_count','ProductController@product_count');
Route::get('/paytm_redirect','ProductController@paytm_redirect');
