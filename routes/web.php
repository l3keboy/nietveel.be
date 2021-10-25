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
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/terms-of-use', function () {
    return view('terms-of-use');
});
Route::get('/thanks', function () {
    return view('thanks');
});
Route::post('sendmail', 'App\Http\Controllers\SendMailController@send');
