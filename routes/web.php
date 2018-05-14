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

use App\Users;
use App\Employment;
use App\Tasks;
use App\Education;
use App\Skills;

Route::get('/', function () {
    $user = Users::pluck('name')->first();
    $employers = Employment::all();
    $tasks = Tasks::all();
    $education = Education::all();
    $skills = Skills::all();


    return view('welcome', compact('user','skills', 'employers', 'tasks', 'education'));
});

Route::get('/about', function () {

    return view('about');
});

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/admin', function () {

    return view('admin');
});

Route::get('/skills', 'SkillsController@index');

Route::get('/skills/create', 'SkillsController@create');
Route::post('/skills', 'SkillsController@store');

Route::get('/skills/{skill}', 'SkillsController@edit');



//Need to edit for authentication
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
