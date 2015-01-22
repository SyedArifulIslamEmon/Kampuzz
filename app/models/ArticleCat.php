<?php



class ArticleCat extends \Eloquent {
	



// protected $table="kp_course_details";
 protected $primaryKey="cat_id";

public function articleDetails(){

			return $this->belongsToMany('Article','article_to_cats','cat_id');

		}
	





} // end of home model class .
