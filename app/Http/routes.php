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

// Route::get('/', function () {
//     return view('welcome');
// });

// ทดสอบเรียกข้อมูลจากดาต้าเบส
Route::get('/data','TestController@test');

// หน้าแรก
Route::get('/', 'HomeController@getIndex');
// Route::controller('home', 'HomeController');

// รายงาน
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

// ตั้งค่า
Route::group(['prefix' => 'setting', 'namespace' => 'Setting'], function(){
  Route::controller('user', 'UserController');
  Route::controller('permission', 'PermissionController');
  Route::controller('target', 'TargetController');
  Route::controller('department', 'DepartmentController');
  Route::controller('dept_out', 'Dept_outController');
  Route::controller('dept_out_type', 'Dept_out_typeController');
  Route::controller('country', 'CountryController');
  Route::controller('province', 'ProvinceController');
  Route::controller('amphoe', 'AmphoeController');
  Route::controller('tumbon', 'TumbonController');
  Route::controller('prefix', 'PrefixController');
  Route::controller('gender', 'GenderController');
  Route::controller('religion', 'ReligionController');
  Route::controller('nationality', 'NationalityController');
  Route::controller('race', 'RaceController');
  Route::controller('channel', 'ChannelController');
  Route::controller('dept_info', 'Dept_infoController');
  Route::controller('career', 'CareerController');
  Route::controller('situation', 'SituationController');
  Route::controller('cable_type', 'Cable_typeController');
  Route::controller('category_info', 'Category_infoController');
  Route::controller('channel_know', 'Channel_knowController');
  Route::controller('urgent', 'UrgentController');
  Route::controller('doc_type', 'Doc_typeController');
  Route::controller('position', 'PositionController');
  Route::controller('user1300_type', 'User1300_typeController');
  Route::controller('status', 'StatusController');
  Route::controller('risk', 'RiskController');
  Route::controller('help', 'HelpController');
});

// Ajax
Route::controller('ajax', 'AjaxController');
