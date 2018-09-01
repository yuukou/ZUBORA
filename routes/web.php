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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/welcome', 'TopController@index')->name('welcome');

Route::group(['namespace' => 'Auth'], function () {

//facebook
    Route::get('/login/facebook', 'SocialController@getFacebookAuth')->name('facebook.login');
    Route::get('/login/facebook/callback', 'SocialController@getFacebookAuthCallBack')->name('facebook.login.callback');

//google
    Route::get('/login/google', 'SocialController@getgoogleAuth')->name('google.login');
    Route::get('/login/google/callback', 'SocialController@getgoogleAuthCallBack')->name('google.login.callback');
});

Route::group(['middleware' => 'auth'], function () {

    Route::post('/logout', 'Auth\LogoutController@logout')->name('logout');

    Route::get('/mypage/edit', 'MyPageController@index')->name('mypage');
    Route::get('/mypage/{reservationId}/image/display', 'MyPageController@imageDisplay')->name('mypage.image.display');

    Route::get('/reservation/edit', 'ReservationController@editForm')->name('reservation.edit');
    Route::post('/reservation/add', 'ReservationController@add')->name('reservation.add');
    Route::post('/reservation/update', 'ReservationController@update')->name('reservation.update');
});
