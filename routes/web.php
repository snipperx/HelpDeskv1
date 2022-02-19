<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::resource('posts','PostController');

Auth::routes();
Route::get('/', 'DashboardController@index')->name('/');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/company_config', 'settings\CompanySettingsController@index')->name('company_config');
Route::post('/theme', 'settings\CompanySettingsController@store')->name('theme');
