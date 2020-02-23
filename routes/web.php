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

Route::group(['prefix' => 'tournament'], function () {
    Route::get('1', function () {
        return view('tournament');
    });
    Route::get('', function () {
        return view('tournament_list');
    });
    Route::get('personal', function () {
        return view('tournament.index');
    });
    Route::get('1/teams/1', function () {
        return view('teaminfo');
    });
    Route::get('create', function () {
        return view('tournament.create');
    });
});

Route::group(['prefix' => 'teams'], function () {
    Route::get('create', function () {
        return view('teams.create');
    });
});
