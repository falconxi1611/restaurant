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

Route::get('/', 'HomeController@showView');

Route::get('/about', 'AboutController@showView');

Route::get('/service',  'ServiceController@showView');

Route::get('/gallery', function () {
    return view('gallery/gallery');
});

Route::get('/contact', function () {
    return view('contact/contact');
});

Route::get('/code', function () {
    return view('code/code');
});

Route::get('/icon', function () {
    return view('icon/icon');
});
