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

Route::group(['prefix' => 'management',
			 'namespace' => 'Admin', 
			 'middleware' => 'auth.admin'
			 ], function () {
	// Matches The "/management/*" URL
    Route::get('/', 'DashboardController@index');
    Route::get('product', 'DashboardController@product')->name('admin.product');

    Route::resource('category', 'CategoryController', [
    	'names' => [
		 	'index' => 'admin.category',
		 	'create' => 'admin.category.create',
		 	'store' => 'admin.category.store',
		 	'destroy' => 'admin.category.destroy',
		 	'edit' => 'admin.category.edit',
		 	'update' => 'admin.category.update',
		]
		// 'as' => 'admin.category'
	]);
});
Route::get('/logout', function () {
	Auth::logout();
    return redirect('/');
});