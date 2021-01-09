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

 
Route::get('/', 'CinemaController@index')->name('cinema');
Route::get('nowplaying', 'CinemaController@nowplaying')->name('nowplaying');
Route::get('upcoming', 'CinemaController@upcoming')->name('upcoming');
Route::get('theaters', 'CinemaController@theaters')->name('theaters');
Route::get('detailmovie/{id}', 'CinemaController@detailmovie')->name('detailmovie');
Route::get('detailtheater/{id}', 'CinemaController@detailtheaterid');
Route::get('detailtheater', 'CinemaController@detailtheater')->name('detailtheater');
Route::get('detailstudio/{id}', 'CinemaController@detailstudioid');
Route::get('detailstudio', 'CinemaController@detailstudio')->name('detailstudio');

Route::get('seet', 'CinemaController@seet')->name('seet');
Route::get('tiket', 'CinemaController@tiket')->name('tiket');
Route::get('receipt', 'CinemaController@receipt')->name('receipt');
Route::get('more','CinemaController@more')->name('more');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin', 'AdminController@admin')->name('admin');
Route::get('datamovie', 'AdminController@datamovie')->name('datamovie');
Route::get('datamovie/add', 'AdminController@add')->name('add');
Route::post('datamovie', 'AdminController@addprocess')->name('addprocess');
Route::get('datamovie/edit/{id}', 'AdminController@edit')->name('edit');
Route::patch('datamovie/{id}', 'AdminController@editProcess')->name('editprocess');
Route::delete('datamovie/{id}', 'AdminController@delete')->name('delete');


Route::get('dataseat', 'SeatController@dataseat')->name('dataseat');
Route::get('dataseat/addseat', 'SeatController@addseat')->name('addseat');
Route::post('dataseat', 'SeatController@addseatprocess')->name('addseatprocess');
Route::get('dataseat/editseat/{id}', 'SeatController@editseat')->name('editseat');
Route::patch('dataseat/{id}', 'SeatController@editseatProcess')->name('editseatprocess');
Route::delete('dataseat/{id}', 'SeatController@delete')->name('delete');

Route::get('datatime', 'TimeController@datatime')->name('datatime');
Route::get('datatime/addtime', 'TimeController@addtime')->name('addtime');
Route::post('datatime', 'TimeController@addtimeprocess')->name('addtimeprocess');
Route::get('datatime/edittime/{id}', 'TimeController@edittime')->name('edittime');
Route::patch('datatime/{id}', 'TimeController@edittimeProcess')->name('edittimeprocess');
Route::delete('datatime/{id}', 'TimeController@delete')->name('delete');

Route::get('datatheater', 'TheaterController@datatheater')->name('datatheater');
Route::get('datatheater/addtheater', 'TheaterController@addtheater')->name('addtheater');
Route::post('datatheater', 'TheaterController@addtheaterprocess')->name('addtheaterprocess');
Route::get('datatheater/edittheater/{id}', 'TheaterController@edittheater')->name('edittheater');
Route::patch('datatheater/{id}', 'TheaterController@edittheaterProcess')->name('edittheaterprocess');
Route::delete('datatheater/{id}', 'TheaterController@delete')->name('delete');

Route::get('datastudio', 'TheaterController@datastudio')->name('datastudio');
Route::get('datastudio/addstudio', 'TheaterController@addstudio')->name('addstudio');
Route::post('datastudio', 'TheaterController@addstudioprocess')->name('addstudioprocess');
Route::get('datastudio/editstudio/{id}', 'TheaterController@editstudio')->name('editstudio');
Route::patch('datastudio/{id}', 'TheaterController@editstudioProcess')->name('editstudioprocess');
Route::delete('datastudio/{id}', 'TheaterController@deletestudio')->name('delete');

Route::get('dataiklan', 'IklanController@dataiklan')->name('dataiklan');
Route::get('dataiklan/addiklan', 'IklanController@addiklan')->name('addiklan');
Route::post('dataiklan', 'IklanController@addiklanprocess')->name('addiklanprocess');
Route::get('dataiklan/editiklan/{id}', 'IklanController@editiklan')->name('editiklan');
Route::patch('dataiklan/{id}', 'IklanController@editiklanProcess')->name('editiklanprocess');
Route::delete('dataiklan/{id}', 'IklanController@deleteiklan')->name('deleteiklan');