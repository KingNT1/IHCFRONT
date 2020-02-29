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
// User
Route::get('/', ['as' => 'user.signinView', 'uses' => 'UserController@signinView']);
Route::get('/close', ['as' => 'user.close', 'uses' => 'UserController@logout']);
Route::get('/register', ['as' => 'user.registerView', 'uses' => 'UserController@registerView']);

Route::post('/signin', ['as' => 'user.signin', 'uses' => 'UserController@signin']);
Route::post('/register', ['as' => 'user.register', 'uses' => 'UserController@register']);

//Home
Route::get('/home', ['as' => 'home', 'uses' => 'UserController@getHome']);

//Teams
Route::group(['prefix' => 'team'], function () {
    //Vista de crear equipo en determinado torneo (id de torneo)
    Route::get('/create/t/{id}', ['as' => 'team.createView', 'uses' =>'TeamController@createView']);

    //Vista de info equipo en determinado torneo (id de equipo)
    Route::get('/info/{id}', ['as' => 'team.info', 'uses' => 'TeamController@teamView']);

    Route::post('/create', ['as' => 'team.create', 'uses' => 'TeamController@createTeam']);
});

Route::group(['prefix' => 'tournament'], function () {
    Route::get('', ['as' => 'tournament.index', 'uses' => 'TournamentController@index']);
    Route::get('personal', ['as' => 'tournament.personal', 'uses' => 'TournamentController@personal']);
    Route::get('create', ['as' => 'tournament.create', 'uses' => 'TournamentController@create']);
    Route::get('{id}/info', ['as' => 'tournament.show', 'uses' => 'TournamentController@show']);
    Route::get('{id}/match', ['as' => 'tournament.match', 'uses' => 'TournamentController@matches']);

    Route::post('{id}/update', ['as' => 'tournament.update', 'uses' => 'TournamentController@update']);
    Route::post('type_tournament', ['as' => 'tournament.type', 'uses' => 'TournamentController@typeByDeport']);
    Route::post('', ['as' => 'tournament.save', 'uses' => 'TournamentController@store']);

});
