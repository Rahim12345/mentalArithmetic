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

Route::get('/', 'App\Http\Controllers\authController@getLogin')->name('login')->middleware('guest');
Route::post('/', 'App\Http\Controllers\authController@postLogin')->name('post.login')->middleware(['guest','throttle:5,1']);

Route::get('/registration', 'App\Http\Controllers\authController@getRegistration')->name('registration')->middleware('guest');
Route::post('/registration', 'App\Http\Controllers\authController@postRegistration')->name('post.registration')->middleware('guest');

Route::get('/logout', 'App\Http\Controllers\authController@logout')->name('logout')->middleware('auth');



Route::group(['middleware' => ['auth']], function () {
    Route::get('homepage','App\Http\Controllers\Frontend\homeController@homepage')->name('homepage');

    Route::get('multiplicationStart','App\Http\Controllers\Frontend\multiplicationController@index')->name('multiplicationStart');
    Route::get('multiplication','App\Http\Controllers\Frontend\multiplicationController@multiview')->name('multiplication');
    Route::post('multiplication','App\Http\Controllers\Frontend\multiplicationController@multiviewPost')->name('multiplication.post');

    Route::get('archive','App\Http\Controllers\Frontend\archiveController@archive')->name('archive');
    Route::get('archiveMore/{student_name}/{exam_id}','App\Http\Controllers\Frontend\archiveController@archiveMore')->name('archiveMore');

    Route::get('additionStart','App\Http\Controllers\Frontend\additionController@index')->name('additionStart');
});
