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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'activities' => 'ActivityController',
    'teams' => 'TeamController'
]);

Route::prefix('/teams')->group(function(){
    Route::get('{team}/join', 'TeamController@join')->name('teams.join');
    Route::get('{team}/leave', 'TeamController@leave')->name('teams.leave');
    Route::get('{team}/activities', 'TeamController@activities')->name('teams.activities');
    Route::post('{team}/activities/assign', 'TeamController@assign')->name('teams.activities.assign');
});