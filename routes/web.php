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


Route::group(['middleware' => ['portal', 'auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
});

Route::group(['namespace' => 'Auth'], function () {
    Route::post('/send-reset-mail', 'ResetPasswordController@sendResetMail')->name('send-reset-mail');
    Route::get('/reset', 'ResetPasswordController@reset')->name('reset-password');
    Route::get('denied', 'DeniedController@denied')->name('denied');
    Route::get('login', 'LoginController@loginView')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LogoutController@logout')->name('logout');
    Route::post('register', 'RegisterController@register')->name('register');
});
