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

// Frontend
Route::get('/','PageController@index');
Route::get('novel/{novelID}','PageController@show');
Route::get('novel/{novelID}/{chapterNum}','PageController@read');
Route::get('/about','PageController@about');
Route::get('/follow','PageController@follow');

// Comment
Route::post('/comment','PageController@createComment');

// Search
Route::get('category/{categoryID}','PageController@categorySearch');
Route::get('search','PageController@search');

//login && signup
// Route::get('login','UserController@getLogin');
// Route::post('login','UserController@postLogin');
// Route::get('logout','UserController@getLogout');
// Route::get('signup','UserController@getSignup');
// Route::post('signup','UserController@postSignup');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Show Register Page & Login Page
Route::get('/login', 'LoginController@show')->name('login')->middleware('guest');
Route::get('/signup', 'RegistrationController@show')
    ->name('register')
    ->middleware('guest');

// Register & Login User
Route::post('/login', 'LoginController@authenticate');
Route::post('/signup', 'RegistrationController@register');

// Protected Routes - allows only logged in users
Route::middleware('auth')->group(function () {
    // Write
    Route::get('write/{novelID}/{chapterNum}','PageController@write');
    Route::post('write/','PageController@store');

    Route::get('/logout', 'LoginController@logout');
    Route::post('/logout', 'LoginController@logout');
});
