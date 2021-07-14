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




Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/opss', 'HomeController@blocked')->name('blocked');
Route::post('/registeruser', 'HomeController@store')->name('regis.store');


Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::group(
    ['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']],
    function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::resource('user', 'UserController');
        Route::put('/aktifasi-user/{id}/', 'UserController@aktifasiAkun')->name('user.aktifasiAkun');
        Route::get('blocked', 'DashboardController@blocked')->name('blocked');
        Route::get('setting-profile', 'SettingProfileController@index')->name('setting-profile');
        Route::put('update-profile', 'SettingProfileController@updateProfile')->name('update-profile');
        Route::put('update-password', 'SettingProfileController@updatePassword')->name('update-password');
        Route::resource('rule-diagnosa', 'RuleDiagnosaController');
        Route::resource('gejala', 'GejalaController');
        Route::resource('pertanyaan', 'PertanyaanController');
        Route::resource('riwayat-diagnosa-user', 'RiwayatDiagnosaController');
        Route::resource('petunjuk-diagnosa', 'TermConditionController');
        Route::put('ubahstatus/{id}', 'TermConditionController@ubahStatus')->name('ubahstatus');
        Route::resource('saran', 'SaranController');

    });

Route::group(
    ['as' => 'user.', 'prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']],
    function () {
        Route::resource('riwayat-diagnosa', 'RiwayatDiagnosaController');
        Route::resource('setting-profile', 'SettingProfileUserController');
        Route::resource('term-condition', 'IntruksiController');
        Route::put('update-profile', 'SettingProfileUserController@updateProfile')->name('update-profile');
        Route::put('update-password', 'SettingProfileUserController@updatePassword')->name('update-password');
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('diagnosa', 'DiagnosaController@index')->name('diagnosa');
        Route::get('gejala', 'GejalaController@index')->name('gejala');
        Route::get('blocked', 'DashboardController@blocked')->name('blocked');
        Route::get('artikel', 'DashboardController@showArtikel')->name('artikel');


    });
