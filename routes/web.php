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
Auth::routes();

Route::get('/','HomeController@index')->name('home');
Route::get('/about','HomeController@about')->name('about');
Route::get('/what-we-are','HomeController@what_we_are')->name('what_we_are');
Route::get('/services/{id}','HomeController@services')->name('services');
Route::get('/contact','HomeController@contact')->name('contact');
Route::post('/contact/post','Admin\ContactController@postContact')->name('comment.post');
Route::get('/user/profile/{id}','ProfileController@index')->name('user.profile');
Route::post('/user/profile/update/{id}','ProfileController@update')->name('user.update');

//Admin Login Route
Route::get('sadmin/login','Auth\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/login/submit','Auth\Admin\LoginController@login')->name('admin.login.submit');
Route::post('/logout/submit','Auth\Admin\LoginController@logout')->name('admin.logout');

Route::get('/logout', 'Auth\LoginController@logout')->name('user.logout');

Route::group(['prefix'=>'admin', 'middleware'=>'auth:admin', 'namespace'=>'Admin'], function(){
Route::get('/dashboard','DashboardController@index')->name('admin.dashboard');
Route::resource('/slider','SliderController');
Route::resource('/service','ServiceController');
Route::resource('/setting','SettingController');
Route::get('/profile/{id}','ProfileController@index')->name('admin.profile');
Route::post('/profile/update/{id}','ProfileController@update')->name('admin.update');
Route::get('/contact','ContactController@index')->name('contact.index');
Route::DELETE('/delete/{id}','ContactController@destroy')->name('contact.destroy');
});