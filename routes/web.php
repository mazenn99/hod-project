<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    return view('index');
})->name('home');
Route::get('feature_system' , 'FeatureSystemController@featureView')->name('feature_system_view');
Route::post('send_email' , 'sendEmailController@sendEmail')->name('send.email');
Route::post('price' , 'FeatureSystemController@price')->name('ask.price');


