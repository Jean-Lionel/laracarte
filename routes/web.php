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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[
	'as' => 'root_path',
	'uses' => 'pagesController@home'
]);

Route::get('/about',[
	'as' => 'about',
	'uses' => 'pagesController@about'
]);

Route::get('/contact',[
	'as'=>'contact_path',
	'uses' => 'ContactsController@create'
]);


