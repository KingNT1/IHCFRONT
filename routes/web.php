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




Route::get('/', ['as' => 'user.signinView', 'uses' => 'UserController@signinView']);
Route::post('/signin', ['as' => 'user.signin', 'uses' => 'UserController@signin']);
Route::get('/close', ['as' => 'user.close', 'uses' => 'UserController@logout']);

//Home
Route::get('/home', ['as' => 'home', 'uses' => 'UserController@getHome']);

//Teams
Route::group(['prefix' => 'team'], function () {
    Route::post('/create', ['as' => 'team.create', 'uses' => 'TeamController@createTeam']);
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
