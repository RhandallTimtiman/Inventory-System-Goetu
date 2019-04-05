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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/employee', 'EmployeeController');
Route::get('/employeeEdit', 'EmployeeController@edit');

Route::resource('/item', 'ItemController');
Route::get('/itemEdit', 'ItemController@edit');

Route::resource('/status', 'StatusController');
Route::get('/statusEdit', 'StatusController@edit');

Route::resource('/unit', 'UnitController');
Route::get('/unitEdit', 'UnitController@edit');
Route::get('/unitShow', 'UnitController@show');
Route::get('/unitAddItems', 'UnitController@additemsunit');

Route::resource('/location', 'LocationController');
Route::get('/locationEdit', 'LocationController@edit');
