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

// Route::get('/admin/dashboard', 			   'UserController@index')   ->name('admin.dashboard.index');
// Route::get('/admin/user/listUser', 'UserController@listUser')->name('admin.user.listUser');
// Route::get('/admin/user/addUser',   'UserController@addUser')->name('admin.user.addUser');

Route::group(['prefix'=>'/admin','middleware'=>'auth'], function()
{

	// Route::get('/admin/dashboard', 'UserController@index')   ->name('admin.dashboard.index');
	// Route::get('/admin/user/listUser','UserController@listUser')->name('admin.user.listUser');
	// Route::get('/admin/user/addUser', 'UserController@addUser')->name('admin.user.addUser');
	//'prefix'=>'/admin' garepachi tes qroup ma aaune '/admin' hataunu par6 
	//Netra url projectname/admin/admin hun6 (i.e admin repeat hun6)

	Route::get('/dashboard', 	'UserController@index')   ->name('admin.dashboard.index');
	// project name /admin pachi kei china bhane pani dash board ma puraucha 
	Route::get('/', 	         'UserController@index')   ->name('admin.dashboard.index');
	Route::get('/user/select',    'UserController@select')->name('admin.user.select');
	Route::get('/user/add',       'UserController@add')->name('admin.user.add');
	Route::get('/user/edit/{id}', 'UserController@edit')->name('admin.user.edit');
	Route::get('/user/delete/{id}','UserController@delete')->name('admin.user.delete');
	// need to submit form only when storing and updating so that this method are post
	Route::post('/user/store',     'UserController@store')->name('admin.user.store');
	Route::post('/user/update/{id}','UserController@update')->name('admin.user.update');


	//For Category Controller
	Route::get('/category/select',    'CategoryController@select')->name('admin.category.select');
	Route::get('/category/add',       'CategoryController@add')->name('admin.category.add');
	Route::get('/category/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
	Route::get('/category/delete/{id}','CategoryController@delete')->name('admin.category.delete');
	// need to submit form only when storing and updating so that this method are post
	Route::post('/category/store',     'CategoryController@store')->name('admin.category.store');
	Route::post('/category/update/{id}','CategoryController@update')->name('admin.category.update');



	//For News
    Route::get('/news/select',    'NewsController@select')->name('admin.news.select');
    Route::get('/news/add',       'NewsController@add')->name('admin.news.add');
    Route::get('/news/edit/{id}', 'NewsController@edit')->name('admin.news.edit');
    Route::get('/news/delete/{id}','NewsController@delete')->name('admin.news.delete');
    // need to submit form only when storing and updating so that this method are post
    Route::post('/news/store',     'NewsController@store')->name('admin.news.store');
    Route::post('/news/update/{id}','NewsController@update')->name('admin.news.update');



});

Auth::routes();
// url method coming only after giving url
//Route::get('/home', 'HomeController@index')->name('home');






