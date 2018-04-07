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

Route::get('/', 'ProductionController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/production','ProductionController',['names' => [
    'create' => 'production.create',
    'show' => 'production.show',
]]);

Route::get('/out_show', 'ProductionController@getOutShow');

Route::get('/admin/manageEmployee','AdminController@index');


Route::get('/admin/{id}/edit','AdminController@employeeEdit');

Route::get('/admin/{id}/delete','AdminController@employeeDelete');

Route::get('/production/{id}/delete','ProductionController@delete');

Route::PATCH('/admin/manageEmployee/{id}','AdminController@employeeUpdate');
