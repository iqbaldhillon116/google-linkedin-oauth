<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
  
Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

// Route::get('linkedin', function () {
//     return view('auth/linkedinAuth');
// });
// Route::get('auth/linkedin', 'Auth\AuthController@redirectToLinkedin');
// Route::get('auth/linkedin/callback', 'Auth\AuthController@handleLinkedinCallback');

Route::get('login', 'LoginController@index');
Route::get('login/{provider}', 'LoginController@redirectToProvider');
Route::get('{provider}/callback', 'LoginController@handleProviderCallback');
Route::get('/home', function () {
    return 'User is logged in';
});
