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

Route::get('/about', function () {
    return view('about');
});
Route::get('/', 'StudentController@index')->name('home');
Route::get('/home', 'StudentController@index')->name('home');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
Route::post('login', [ 'as' => 'login', 'uses' => 'SessionController@store']);

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/students', 'StudentController@index');
Route::get('/students/create', 'StudentController@create');
Route::post('/students', 'StudentController@store');
Route::get('/students/{student}', 'StudentController@show');

Route::post('/students/{student}/modify', 'DailyStatusController@update');
Route::post('/students/{student}/modified', 'DailyStatusController@updated');
Route::post('/dailystatus/{student}/create', 'DailyStatusController@create');
