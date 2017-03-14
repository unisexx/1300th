<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data','TestController@test');

Route::controller('home', 'HomeController');

// report
Route::group(['prefix' => 'report', 'namespace' => 'Report'], function(){
  Route::controller('r1', 'R1Controller');
  Route::controller('r2', 'R2Controller');
  Route::controller('r3', 'R3Controller');
  Route::controller('r4', 'R4Controller');
  Route::controller('r5', 'R5Controller');
  Route::controller('r6', 'R6Controller');
  Route::controller('r7', 'R7Controller');
  Route::controller('log', 'LogController');
});
