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
    //$user = \App\Users::where('id','=',1)->get();
    $user = \App\Users::pluck('name')->first();
    $employers = \App\Employment::where('user_id','=',1)->get();
    $tasks = \App\Tasks::where('user_id','=',1)->get();
    $education = \App\Education::where('user_id','=',1)->get();
    $skills = \App\Skills::where('user_id','=',1)->get();


    return view('welcome', compact('user','skills', 'employers', 'tasks', 'education'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
