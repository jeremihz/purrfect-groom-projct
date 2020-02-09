<?php

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
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


Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function(){
  Route::get('/hours', 'HomeController@hours');
  Route::get('/services', 'HomeController@services');
  Route::get('/address', 'HomeController@address');
  Route::post('/send', 'SendEmailController@send');
  Route::get('/appointment', 'HomeController@appointment');
//  Route::post('send', 'SendEmailController@send');
});

Auth::routes();


 Route::get('/home', 'HomeController@index')->name('home');
