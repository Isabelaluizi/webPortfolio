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
Route::post('/sendEmail','MailController@sendEmail');
Route::get('/getMessage', function() {
    return response()->json("<span>Hi, my name is Isabela. I'm a Full Stack Web Developer living in Alberta, Canada.</span>");
});

