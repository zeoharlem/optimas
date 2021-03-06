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

Route::get('/', 'HomeController@indexAction');
Route::get('/about-us', 'AboutusController@indexAction');
Route::get('/commercial', 'CommercialController@indexAction');
Route::get('/contact', 'ContactusController@indexAction');
// Route::get('distribution', 'DistributionController');
Route::get('/events', 'EventsController@indexAction');
Route::get('/media', 'MediaController@indexAction');
Route::get('/media/shoulders', 'MediaController@shouldersAction');
Route::get('/media/afrosport', 'MediaController@afrosportAction');
Route::get('/media/broadcasters', 'MediaController@broadcastersAction');
Route::get('/news', 'NewsController@indexAction');
Route::get('/production', 'ProductionController@indexAction');

//Authentication Routes
Auth::routes();

Route::get('/dashboard', 'MembersController@indexAction')->name('dashboard')->middleware("members");
// Route::get('/dashboard', 'MembersController@indexAction');
//Route::get('/home', 'HomeController@index')->name('home');
