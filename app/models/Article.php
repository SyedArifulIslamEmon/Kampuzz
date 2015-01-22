<?php



class Article extends Eloquent {
	
 protected $primaryKey="article_id";




		public function articleDetails(){

			return $this->belongsToMany('ArticleCat','article_to_cats','article_id');

		}
	










} // end of home model class .
