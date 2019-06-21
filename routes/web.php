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
    return view('auth.login');
});
Route::get('/LandingPage', function () {
    return view('LandingPage');
});
Route::view('student', '102292.student');
Route::view('fees', '102292.fees');

Route::get('totalfees', 'StudentsController@view');
Route::get('installments', 'FeesController@itsgonnadowork');

Route::post('student', 'StudentsController@registerStudent');
Route::post('fees', 'FeesController@payFees');

// localhost/102292/public/student

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
