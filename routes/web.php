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
})->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/influencers', 'InfluencerController@index')->name('influencers.index');
    Route::get('/influencers/export', 'InfluencerController@export')->name('influencers.export');
});
