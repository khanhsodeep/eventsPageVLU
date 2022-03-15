<?php

use App\Http\Controllers\AdminController;
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
Route::resource('/bai-viet', 'ArticleController');

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// user info
Route::get('/home/profile', 'HomeController@userProfile')->name('/home/profile');


Route::get('/admin', 'AdminController@showImportantInfo')
->middleware(['auth','role:admin']);