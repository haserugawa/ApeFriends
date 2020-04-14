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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::resource('users', 'UserController');
Route::resource('profile', 'ProfileController');

Route::get('/', function(){
	return view('welcome');
})->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');


//model操作
Route::get('/user/index', 'UserController@index');
Route::get('/profile/index', 'ProfileController@index');

//profile更新処理(非同期)
Route::post('/profile/update_job','ProfileController@profile_update_job');