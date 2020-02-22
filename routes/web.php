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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tournament/1', function () {
    return view('tournament');
});

Route::get('/tournament', function () {
    return view('tournament_list');
});

Route::get('tournament/1/teams/1', function () {
    return view('teaminfo');
});
