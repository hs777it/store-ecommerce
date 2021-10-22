<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Note that the Prefix is admin for all file route (outerServiceProvider)
Route::group(['namespace' => 'Dashboard','middleware' => 'auth:admin'],function(){

    // the first page admin visits if authenticated
    Route::get('/','DashboardController@index') -> name('admin.dashboard');

});

Route::group(['namespace' => 'Dashboard','middleware' => 'guest:admin'],function(){

    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.post.login');

});
