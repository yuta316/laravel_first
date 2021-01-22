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
})->name('login');
//Route::get('contact/index', 'ContactFormController@index');

//認証　contactフォルダを認証された時表示
Route::group(['prefix' => 'contact', 'middleware'=>'auth'], function(){
    Route::get('index', 'ContactFormController@index')->name('contact.index');
    Route::get('create', 'ContactFormController@create')->name('contact.create');
    Route::post('store', 'ContactFormController@store')->name('contact.store'); 
});

Route::resource('contact', 'ContactFormController')->only([
    'index', 'show'

]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
