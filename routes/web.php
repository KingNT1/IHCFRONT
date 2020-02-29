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
    return redirect(url('/home'));
});

Route::get('/home', function () {
    return view('home');
});

Route::group(['prefix' => 'tournament'], function () {
    Route::get('', ['as' => 'tournament.index', 'uses' => 'TournamentController@index']);
    Route::get('personal', ['as' => 'tournament.personal', 'uses' => 'TournamentController@personal']);
    Route::get('create', ['as' => 'tournament.create', 'uses' => 'TournamentController@create']);
    Route::get('{id}/info', ['as' => 'tournament.show', 'uses' => 'TournamentController@show']);

    Route::get('1/teams/1', function () {
        return view('teaminfo');
    });
});
