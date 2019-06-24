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

Route::get('/home', ['uses'=>'\App\Http\Controllers\ProductController@getIndex', 'as'=>'shop.index']);

Route::get('/signup',['uses'=>'\App\Http\Controllers\UserController@getSignup', 'as'=>'user.signup','middleware'=>'guest']);

Route::post('/signup',['uses'=>'\App\Http\Controllers\UserController@postSignup', 'as'=>'user.signup','middleware'=>'guest']);

Route::get('/signin',['uses'=>'\App\Http\Controllers\UserController@getSignin', 'as'=>'user.signin','middleware'=>'guest']);

Route::post('/signin',['uses'=>'\App\Http\Controllers\UserController@postSignin', 'as'=>'user.signin','middleware'=>'guest']);

Route::get('/userprofile',['uses'=>'\App\Http\Controllers\UserController@getProfile', 'as'=>'user.profile','middleware'=>'auth']);



Route::get('/adminsignin', function () {
    return view('admin.adminsignin');

});

Route::get('/adminsignup', function () {
    return view('admin.adminsignup');

});

Route::get('/adminsignup',['uses'=>'\App\Http\Controllers\AdminController@getSignup', 'as'=>'admin.adminsignup']);

Route::post('/adminsignup',['uses'=>'\App\Http\Controllers\AdminController@postSignup', 'as'=>'admin.adminsignup']);

Route::get('/adminsignin',['uses'=>'\App\Http\Controllers\AdminController@getSignin', 'as'=>'admin.adminsignin']);

Route::post('/adminsignin',['uses'=>'\App\Http\Controllers\AdminController@postSignin', 'as'=>'admin.adminsignin']);

Route::post('/admin/adminprofile',['uses'=>'\App\Http\Controllers\AdminController@getProfile', 'as'=>'admin.adminprofile']);

/*Route::get('/addproduct', function () {
    return view('admin.addproduct');
}); */

//Route::post('/addproduct',['uses'=>'\App\Http\Controllers\ProductController@create', 'as'=>'admin.addproduct']); 

Route::get('/user/logout',['uses'=>'\App\Http\Controllers\UserController@getLogout', 'as'=>'user.logout']);

Route::get('/add-to-cart/{id}'
	,['uses'=>'\App\Http\Controllers\ProductController@getAddToCart', 
	'as'=>'product.addToCart']);
//Reduce 1 Route
Route::get('/reduce/{id}'
	,['uses'=>'\App\Http\Controllers\ProductController@getReduceByOne', 
	'as'=>'product.reduceByOne']);
// Reduce All route

Route::get('/remove/{id}'
	,['uses'=>'\App\Http\Controllers\ProductController@getRemoveItem', 
	'as'=>'product.remove']);

Route::get('/shopping-cart'
	,['uses'=>'\App\Http\Controllers\ProductController@getCart', 
	'as'=>'product.shoppingCart']);

Route::get('/checkout'
	,['uses'=>'\App\Http\Controllers\ProductController@getCheckout', 
	'as'=>'checkout',
	'middleware'=>'auth']);

Route::post('/checkout'
	,['uses'=>'\App\Http\Controllers\ProductController@postCheckout', 
	'as'=>'checkout',
	'middleware'=>'auth']);
