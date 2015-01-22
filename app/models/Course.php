<?php



class Course extends Eloquent {
	



// protected $table="kp_courses";
 protected $primaryKey="course_id";

public function detail(){

	return $this->hasOne('CourseDetail');
}
public function features(){

	return $this->hasMany('CourseFeature');
}
public function collegeList(){

	return $this->belongsTo('CollegeMaster','college_id');

}
	



} // end of home model class .
