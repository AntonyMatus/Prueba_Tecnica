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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/customers', 'Admin\ClientesController@index')->name('customers.index');
Route::get('/admin/customers/create', 'Admin\ClientesController@create')->name('customers.create');
Route::post('/admin/customers/store', 'Admin\ClientesController@store')->name('customers.store');
Route::get('/admin/customers/edit/{id}', 'Admin\ClientesController@edit')->name('customers.edit');
Route::post('/admin/customers/edit/{id}', 'Admin\ClientesController@update')->name('customers.update');
Route::get('/admin/customers/delete/{id}', 'Admin\ClientesController@delete')->name('customers.delete');

Route::get('/admin/policy', 'Admin\PolicyController@index')->name('policy.index');
Route::get('/admin/policy/create', 'Admin\PolicyController@create')->name('policy.create');
Route::post('/admin/policy/store', 'Admin\PolicyController@store')->name('policy.store');
Route::get('/admin/policy/edit/{id}', 'Admin\PolicyController@edit')->name('policy.edit');
Route::post('/admin/policy/edit/{id}', 'Admin\PolicyController@update')->name('policy.update');
Route::get('/admin/policy/delete/{id}', 'Admin\PolicyController@destroy')->name('policy.delete');
