<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Resume');
});
Route::get('/about-me', 'AboutMeController@index');
Route::get('/skills', 'SkillsController@index');
Route::get('/hobbies', 'HobbiesController@index');
