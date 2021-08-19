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


Route::get('/', function () {
    return view('welcome');
});



Route::get('/faq01','App\Http\Controllers\ContactsController@faq')->name('faq');
Route::get('/comment01','App\Http\Controllers\ContactsController@comment')->name('comment');
Route::get('/contact01','App\Http\Controllers\ContactsController@contact')->name('contact');
Route::post('/confirm01','App\Http\Controllers\ContactsController@confirm')->name('confirm');
Route::post('/send_action','App\Http\Controllers\ContactsController@send_action')->name('send_action');
Route::post('/complete01','App\Http\Controllers\ContactsController@complete')->name('complete');