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

Route::get('/admin/profile', function () {
    echo "Admin Profile";
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/profile1', function () {
        echo "Admin Profile1";
    });
    Route::get('/admin/profile2', function () {
        echo "Admin Profile2";
    });
    Route::get('/admin/profile3', function () {
        echo "Admin Profile3";
    });
});

Route::resource('student','StudentController');

Route::resource('product','ProductController');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('student','StudentController');

Route::resource('product','ProductController');
   
    
});