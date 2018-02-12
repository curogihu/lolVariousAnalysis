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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/counterbuild'
			, 'CounterBuildController@show_champions_list');

Route::get('/counterbuild/{my_champion_id}'
			,'CounterBuildController@show_opponent_champions_list');

Route::get('/counterbuild/{my_champion_id}/opponent/{enemy_champion_id}'
			, 'CounterBuildController@show_item_builds_list');


