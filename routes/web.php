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
Route::get('/admin/login', 'Admin@login');
Route::post('/admin/login','Admin@loginsubmit');

Route::group(['middleware'=>'loginCheck'], function(){
	Route::get('admin','Admin@dashboard');
	Route::get('admin/logout','Admin@logout');
	Route::get('admin/adduser','Admin@adduser');
});