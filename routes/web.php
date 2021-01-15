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


Route::get('/dashboard', 'LinkController@index');
Route::get('/dashboard/create', 'LinkController@create');
Route::post('/dashboard/create', 'LinkController@store');




// Visitor Routes
// Route::post('/visit/{link}', 'VisitController@store');
// Route::get('/{user}', 'UserController@show');
