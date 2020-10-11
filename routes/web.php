<?php

use Illuminate\Support\Facades\Route;

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
Route::match(['get','post'],'/','IndexController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get','post'],'/admin/dashboard','AdminController@dashboard');

//contact us

Route::match(['get','post'],'/rapid/index','ContactusController@addcontact');

Route::match(['get','post'],'/admin/contactus/view','ContactusController@viewcontactus');

Route::match(['get','post'],'/admin/delete-contact/{id}','ContactusController@delete');


// Blog
Route::match(['get','post'],'/admin/blog/add-blog','BlogController@blog');

Route::match(['get','post'],'/admin/add-blog','BlogController@addblog');

Route::match(['get','post'],'/admin/blog/view-blog','BlogController@view');

Route::match(['get','post'],'/admin/edit-blog/{id}','BlogController@editblog');

Route::match(['get','post'],'/admin/update-blog','BlogController@updateblog');

Route::match(['get','post'],'/admin/delete-blog/{id}','BlogController@deleteblog');

// Important Updates
Route::match(['get','post'],'/admin/impupd/add-imp','ImpupdateController@up');

Route::match(['get','post'],'/admin/add','ImpupdateController@add');

Route::match(['get','post'],'/admin/impupd/view-imp','ImpupdateController@viewimp');

Route::match(['get','post'],'/admin/delete-imp/{id}','ImpupdateController@deleteimp');