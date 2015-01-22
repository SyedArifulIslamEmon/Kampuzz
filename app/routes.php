<?php


// Route::get('/', function()
// {
// 	return View::make('home');
// });
Route::get('/',array('uses'=>'HomeController@index')) ;
Route::get('collegelist/{id}',array('uses'=>'CourseController@courseCollege')) ;
Route::get('coursedetail/{course_id}/{college_id}',array('uses'=>'CourseController@courseDetail')) ;
Route::get('menu',array('uses'=>'MenuController@menu')) ;
