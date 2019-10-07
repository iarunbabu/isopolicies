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
    return view('headlines.index');
});
Route::get('/headlines', function () {
    return view('headlines.index');
});
Route::get('/approved', function () {
    return view('approved.index');
});
Route::get('/tools', function () {
    return view('tools.index');
});
Route::get('/structure', function () {
    return view('structure.index');
});

Route::get('/structure', 'StructureController@index');

Route::resource('policies', 'PolicyController');

Route::resource('deliverable', 'DeliverableController');

Route::resource('activity', 'ActivityController');

Route::get('/structure/view1', function () {
    return view('structure.view1');
});


