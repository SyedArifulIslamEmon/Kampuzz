<?php
$i=0;

foreach ($courseColleges as $courseCollege) {
	$collegeList[$i]['course_id']=isset($courseCollege->course_id)?$courseCollege->course_id:'';
   	$collegeList[$i]['course_name']=isset($courseCollege->course_name)?$courseCollege->course_name:'';
  	$collegeList[$i]['has_detail']=isset($courseCollege->has_detail)?$courseCollege->has_detail:'';
  	$collegeList[$i]['course_duration']=isset($courseCollege->course_duration)?$courseCollege->course_duration:'';
	$collegeList[$i]['college_id']=isset($courseCollege->collegeList->college_id)?$courseCollege->collegeList->college_id:'';
  	$collegeList[$i]['college_logo']=isset($courseCollege->collegeList->college_logo)?$courseCollege->collegeList->college_logo:'';
  	$collegeList[$i]['college_name']=isset($courseCollege->collegeList->college_name)?$courseCollege->collegeList->college_name:'';

   	$collegeList[$i]['city_name']=isset($courseCollege->collegeList->city_name)?$courseCollege->collegeList->city_name:'';   
   	$collegeList[$i]['exam_required']=isset($courseCollege->detail->exam_required)?$courseCollege->detail->exam_required:'';   
	$collegeList[$i]['total_fee']=isset($courseCollege->detail->total_fee)?$courseCollege->detail->total_fee:'';
	$collegeList[$i]['affiliation']=isset($courseCollege->detail->affiliation)?$courseCollege->detail->affiliation:''; 
	$i++;   

}
// echo "<pre>";
// print_r($collegeList);

?>
 
@extends('layouts.master')
@section('menu')
<?php echo $menu; ?>
@stop
@section('content')
    

<div class="breadcrumb">
                    <div class="container">
 
                        <div class="breadcrumb-inner">
                            <div class="subtitle"><h1 class="cs-page-title"><?php echo $course_detail->course_name; ?></h1></div>                         </div>
                    </div>
                </div>
    <div class="clear"></div>
                
    <!-- Header Start -->
    
  
    
        <!-- Header Close -->
    
                    
                                            
                
                
                                    <div id="main" role="main">
        <!-- Container Start -->
            <div class="container">
                <!-- Row Start -->
                <div class="row">
                      <div class="col-md-9">
                        <div class="rich_editor_text"></div>    
    <div class="element_size_100">
      <header class="cs-heading-title">
                    <h2 class="cs-section-title float-left">View Courses</h2>
                      </header>
     <div class="event eventlisting">
   <?php 
    if(!empty($collegeList)){
foreach ($collegeList as $key=>$value) { ?>
      <article class="post-37 events type-events status-publish has-post-thumbnail hentry">
                <figure>
                        <img src="<?php echo $value['college_logo']; ?>" width="78px" alt="College of Engineering Pune " title="College of Engineering Pune ">
                        
                    </figure>
              <div class="text">
                     <div class="event-texttop">
                            <h2 class="cs-post-title">
                                <a href="../coursedetail/<?php echo $value['course_id'].'/'.$value['college_id']; ?>" class="colrhvr"><?php echo $value['college_name']; ?></a>
                            </h2>
                                <ul class="post-categories">
                                    <li>
                                   <a href="../coursedetail/<?php echo $value['course_id'].'/'.$value['college_id']; ?>" rel="tag"><?php echo $value['course_name']; ?></a>
                                </li>
                                <li>
                                    <time>
                                    <i class="fa fa-star golden"></i>
                                    <i class="fa fa-star golden"></i>
                                    <i class="fa fa-star golden"></i>
                                    <i class="fa fa-star golden"></i>
                                    <i class="fa fa-star-half-o golden"></i>
                                    </time>
                                </li>
                                </ul>
                     </div>
                    <div class="post-options">
                         <ul>
                              <?php if($value['course_duration']) { ?>
                           <li>
                            <i class="fa fa-clock-o"></i>
                                   Duration:
                                      <time> 
                                                <?php echo $value['course_duration']; ?>                           
                                        </time>
                                                                              
                            </li>
                              <?php } if($value['exam_required']) { ?>
                            <li>
                                <i class="fa fa-qrcode"></i>
                                <strong>Exam:</strong> 
                                <span>
                                <?php echo $value['exam_required']; ?> 
                            </span>
                        </li>
                          <?php } if($value['city_name']) { ?>
                            <li>
                            <i class="fa fa-map-marker"></i>
                                            Location: 
                                            <span><?php echo $value['city_name']; ?></span>
                            </li>
                             <?php } if($value['total_fee']) { ?>
                            <li>
                                <i class="fa fa-money"></i>
                                <strong>Fee:</strong> 
                             <span>
                                <i class="fa fa-inr">
                                </i><?php echo $value['total_fee']; ?>
                                 </span>
                             </li>
                             <?php } if($value['affiliation']) { ?>
                                      <li>
                            <i class="fa fa-paperclip"></i>
                                            Affiliation: 
                                            <span><?php echo $value['affiliation']; ?></span>
                            </li>
                                 <?php } ?>       
                            </ul>
                        </div>
                         
         <a class="btn cs-bgcolr bgcolr view" href="../coursedetail/<?php echo $value['course_id'].'/'.$value['college_id']; ?>">Details</a>
                                                                                                                                                    
                 </div>
      </article>
      <?php }} ?>
               
                  </div>
                 
</div>

</div>
<aside class="col-md-3">
   

</aside>
</div></div></div></div>






 <script>
            
                $("#checkall").on('click',function() {
                    $('.chkbox').prop('checked', this.checked);
                });
            
  </script>
@stop