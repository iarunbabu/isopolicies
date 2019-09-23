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
Route::get('/headlines', function () {
    return view('welcome');
});
Route::get('/approved', function () {
    return view('approved.index');
});
Route::get('/tools', function () {
    return view('tools.index');
});
Route::get('/structure', function () {
    return view('structure');
});

