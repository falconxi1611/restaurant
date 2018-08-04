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

Route::post('/checkout', 'CartController@show');

Route::post('/checkout_remove', 'CartController@remove');

Route::post('/checkout_all', 'CartController@removeall');

Route::post('/checkout_edit', 'CartController@edit');

Route::post('/payment', 'CartController@payment');

Route::post('/pay', 'CartController@add');

Route::post('/detail', 'MenuDetailController@showPeople');

Route::get('/about', 'AboutController@showView');

Route::get('/service', 'ServiceController@showView');

Route::get('/menu', 'MenuTypeController@showView');

Route::post('/booking', 'MenuTypeController@bookTable');

Route::get('/set_menu', 'MenuController@showList');

Route::get('/option_menu', 'FoodController@showList');

Route::get('menu_id', 'MenuDetailController@showDetail');

Route::get('/add', 'CartController@add');

Route::get('/success', function () {
    return view('success');
});

Route::get('/login', function () {
    return view('login/login');
});
Route::get('/signup', function () {
    return view('login/sign_up');
});

Route::get('/code', function () {
    return view('code/code');
});

Route::get('/contact', function () {
    return view('contact/contact');
});

Route::get('/code', function () {
    return view('code/code');
});

Route::get('/icon', function () {
    return view('success');
});


Route::get('/read', function () {
    $users = DB::table('MENU')->select('MENU_NAME')->get();
    return $users;

});
