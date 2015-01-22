<?php

class CourseController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	public function courseCollege($id) {
		$menu = \App::make('MenuController')->menu();
		$course_detail=Course::where('course_id','=',$id)->first();
		$courseColleges=Course::where('parent_course_id','=',$id)->groupBy('college_id')->take(200)->get();

	return View::make('course.collegeList',array('menu'=>$menu,'courseColleges'=>$courseColleges,'course_detail'=>$course_detail));

				
		
		//return "add";
	}

	public function courseDetail($course_id,$college_id) {
		$menu = \App::make('MenuController')->menu();
		$courseDetails=Course::where('course_id','=',$course_id)
							 ->where('college_id','=',$college_id)->first();

	return View::make('course.courseDetail',array('menu'=>$menu,'courseDetails'=>$courseDetails));
		
		//return "add";
	}

}
