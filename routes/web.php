<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\GoogleController;

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

Route::get('editar/{id?}', "UserController@edit")->name('users.edit');
Route::delete('eliminar/{id?}', "UserController@destroy")->name('users.destroy');
Route::get('update{id?}', "UserController@update")->name('users.update');


Route::resource('games', 'GameController');
Route::resource('games', 'GameController@comprar');
Route::get('list', 'GameController@list');



Route::resource('user', 'UserController');



Route::get('editar/{id}', 'UserController@edit');
Route::get('show/{id}', 'UserController@show');


Route::get('comprar/{id?}', 'GameController@comprar')->name('games.comprar');
Route::get('edit/{id?}', 'GameController@edit')->name('games.edit');
Route::get('update/{id?}', 'GameController@update')->name('games.update');
Route::delete('destroy/{id?}', 'GameController@destroy')->name('games.destroy');
Route::GET('create', 'GameController@create')->name('games.create');
Route::GET('store', 'GameController@store')->name('games.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/games', 'GameController@index');

});

Route::post('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);