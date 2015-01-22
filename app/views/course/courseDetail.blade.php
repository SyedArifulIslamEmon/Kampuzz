<?php
$i=0;
 $feature=array();
foreach ($courseDetails->features as $features) {
  echo $features->feature_title;
	$feature[$i]['course_feature_id']=$features->course_feature_id;
	$feature[$i]['feature_title']=$features->feature_title;
	$feature[$i]['feature_content']=$features->feature_content;
 // print_r($features);
	$i++;
}
//  echo "<pre>";
 // echo $courseDetails->collegeList->college_name."<br>";
//  echo $courseDetails->detail->admission_procedure;

//  print_r($feature);
 // exit();
// print_r($courseDetails->course_name);

?>
<!-- $detail['course_id']=$courseDetail->course_id;
   	$detail['course_name']=$courseDetail->course_name;
  	$detail['has_detail']=$courseDetail->has_detail;
  	$detail['course_duration']=$courseDetail->course_duration;
	$detail['college_id']=$courseDetail->collegeList->college_id;
  	$detail['collge_logo']=$courseDetail->collegeList->college_logo;
  	$detail['college_name']=$courseDetail->collegeList->college_name;

   	$detail['city_name']=$courseDetail->collegeList->city_name;   
   	$detail['exam_required']=$courseDetail->detail->exam_required;   
	$detail['total_fee']=$courseDetail->detail->total_fee;
	$collegeList['affiliation']=$courseDetail->detail->affiliation; 
	    -->


@extends('layouts.master')
@section('menu')
<?php echo $menu; ?>
@stop
@section('content')
   <div class="breadcrumb">
                  <div class="container">

                      <div class="breadcrumb-inner">
                          <div class="subtitle">
                            <h1 class="cs-page-title">
                              <?php echo $courseDetails->course_name; ?>  
                            </h1>
                            <p>
                              <a href="../../collegedetail/<?php echo $courseDetails->collegeList->college_id; ?>" style="color:#EDEDED;">
                               <?php echo  $courseDetails->collegeList->college_name.",".$courseDetails->collegeList->city_name; ?> 
                             </a>
                          </p>
                        </div>
                          </div>
                    </div>
      </div>
        <div class="clear"></div>
    
        <!-- Header Close -->
      
                    
                                            
                <div id="main" role="main"> 
  <!-- Container Start -->
  <div class="container"> 
        <!-- Row Start -->
        <div class="row"> 
      <!--Left Sidebar Starts-->
            <!--Left Sidebar End-->
      <div class="content-left col-md-9">
            
            <div class="element_size_100">
                   <div class="event  event-detail">
                      <article>
                      
                          <div class="detail_figure"></div>                                <div class="detail_inner">
                                    <figure>
                                      <img src="<?php if($courseDetails->collegeList->college_logo){echo $courseDetails->collegeList->college_logo; } ?>" class="attachment-230x172 wp-post-image" alt="12-stat-fort-uni">                                   
                                       </figure>
                                    <div class="text">
                                      
                                     
                                         <div class="post-options">
                            <ul>
                              <?php  if($courseDetails->course_duration) { ?>
                            <li>
                              <i class="fa fa-clock-o"></i>
                              <strong>Duration:</strong>
                              <span> <?php echo $courseDetails->course_duration; ?></span>
                            </li>
                            <?php } if($courseDetails->detail->exam_required) { ?>
                            <li>
                              <i class="fa fa-qrcode"></i>
                              <strong>Exam:</strong> 
                              <span><?php echo $courseDetails->detail->exam_required; ?> </span>
                            </li>
                              <?php } if($courseDetails->detail->total_fee) { ?>
                            <li><i class="fa fa-money">
                            </i>
                            <strong>Fee:</strong>
                             <span>
                              <i class="fa fa-inr">
                              </i><?php echo $courseDetails->detail->total_fee; ?> </span>
                            </li>
                              <?php } if($courseDetails->detail->affiliation) { ?>
                            <li><i class="fa fa-paperclip"></i>
                            <strong>Affiliation:</strong> 
                            <span><?php echo $courseDetails->detail->affiliation; ?></span>
                          </li>
                                <?php } ?>         
                            </ul>
                        </div>
                                         
                                        
                                            <a class="btn cs-buynow cs-bgcolr bgcolr" href="#">Request Brochure</a>
                                                                                </div>
                                </div>
         


<div class="tabs vertical">
<ul class="nav nav-tabs" id="myTab">
<li class=" active"><a data-toggle="tab" href="#tabOverview"><i class="fa fa-plus"></i> Overview</a></li>
 <?php 


  $i=0;
foreach ($feature as $key=>$value) {

?>
<li class=" "><a data-toggle="tab" href="#tab<?php echo $i; ?>"><i class="fa fa-plus"></i> <?php echo $value['feature_title']; ?></a></li>
 <?php $i++; } ?>

</ul>

<div class="tab-content">
<div class="tab-pane fade in active" id="tabOverview">
   <?php if($courseDetails->detail->eligibility){ ?>
 <div class="row course_section">
  <div class="col-md-5"><h5 style="margin:0px"><i class="fa fa-check-square-o"></i> Eligibility:</h5></div>
  <div class="col-md-7"><div class="scrollable"><?php echo $courseDetails->detail->eligibility; ?></div></div>
</div>
<?php }if($courseDetails->detail->admission_procedure){ ?>
<div class="row course_section">
  <div class="col-md-5"><h5 style="margin:0px"><i class="fa fa-list-alt"></i> Admission Procedure:</h5></div>
  <div class="col-md-7"><div class="scrollable"><?php echo $courseDetails->detail->admission_procedure; ?></div></div>
</div>
   <?php } ?>
</div>
 
 <?php 
if(!empty($feature)){
  $j=0;
foreach ($feature as $key=>$value) {

?>
<div class="tab-pane fade in " id="tab<?php echo $j; ?>"> <ul> <li><?php echo $value['feature_content']; ?></li> </ul> </div>
 <?php $j++; }} ?>

</div>

</div>
                          
              
                         </div>
                   </div>
            
                </div>
      <!-- layout End -->
                            <aside class="sidebar-right col-md-3">
                               
                      
                     </aside>
                         
             </div>
            <!-- Row End -->
        </div>
  </div> 
@stop