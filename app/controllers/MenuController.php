<?php

class MenuController extends BaseController {

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

	public function menu() {
		$menus = array(
					array(
							'menu_name' => 'Home',
							'sub_menu' => array()
					) ,
					array(
							'menu_name' => 'All Courses' ,
							'sub_menu' => $this->sub_menu(0)
					),
					array(
							'menu_name' => 'Management' ,
							'sub_menu'	=> $this->sub_sub_menu(104)
						),
					array(
							'menu_name' => 'Information Technology',
							'sub_menu' => $this->sub_sub_menu(63)
						),
					
			) ;

		$resultMenu=$this->resultMenu($menus);

	return View::make('menu.menu')->with('menus',$resultMenu);
		
		//return "add";
	}

	public function sub_menu($id) {


		$a=Course::where('parent_course_id','=',$id)->get();
		foreach($a as $key=>$course) {
			$a[$key]->sub_sub_menu = $this->sub_sub_menu($course->course_id) ;

		}

		return $a ;
	}

	public function sub_sub_menu($id){

		$sub_sub_menu=Course::where('parent_course_id','=',$id)->get();
		return $sub_sub_menu;

	}
	public function resultMenu($menus){
		$i=0;


foreach ($menus as $key=>$value) {
	$menuList[$i]['menu_name']=$value['menu_name'];
	if(!empty($value['sub_menu'])){
		$k=0;
		foreach ($value['sub_menu'] as $sub_key => $sub_value) {

			foreach ($sub_value as $sub_key1 => $sub_value1) {
			//print_r($sub_value);
			$menuList[$i]['sub_menu'][$k]['course_id']=$sub_value->course_id;
			$menuList[$i]['sub_menu'][$k]['course_name']=$sub_value->course_name;
			if(!empty($sub_value->sub_sub_menu)){
				$j=0;
		foreach ($sub_value->sub_sub_menu as $sub_sub_key => $sub_sub_value) {
			
			
			$menuList[$i]['sub_menu'][$k]['sub_sub_menu'][$j]['course_id']=$sub_sub_value->course_id;
			$menuList[$i]['sub_menu'][$k]['sub_sub_menu'][$j]['course_name']=$sub_sub_value->course_name;
			

		$j++;

		}
		
	}
	


			

		}
$k++;
		}

	}
	else{
		$menuList[$i]['sub_menu']=array();
	}
	$i++;

}
return $menuList;
	}


}

		