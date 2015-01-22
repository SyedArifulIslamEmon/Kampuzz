
 
@extends('layouts.master')
@section('menu')
<?php echo $menu; ?>
@stop
@section('content')
    



 
  


        <div class="parallax-fullwidth services-container">
          <div class="container">
                       
            <div class="services"><article class="service-v1"><figure><em class="fa fa-building-o"></em></figure><a href="service_url.html"><h5>12,000+ Colleges</h5></a><p>Search for Colleges in India and Abroad to find the best for you</p></article><article class="service-v1"><figure><em class="fa fa-rocket"></em></figure><a href="service_url.html"><h5>36,000+ Courses</h5></a><p>Get course recommendations, know eligibility &amp; admission procedure</p></article>

            <article class="service-v1"><figure><em class="fa fa-comments"></em></figure><a href="service_url.html"><h5>Ask &amp; Help</h5></a><p>Connect with education experts to choose the right career path</p></article><article class="service-v1 listitem4"><figure><em class="fa fa-shopping-cart"></em></figure><a href="service_url.html"><h5>Online Marketplace</h5></a><p>Purchase Study Material, Online Tests and more. Buy to win the race</p></article></div>
        
            <div class="homepage_search">
            <div class="col-md-12">
        <div class="pagenone">
            
            <h1 class="colr">Get Started</h1>
            <h4>
      Search for Courses, Colleges, Tests &amp; Exams           </h4>
            <!-- Password Protected Strat -->
            <div class="password_protected">   
               <form name="searchForm" action="search" method="post">


<!-- <div class="col-md-2"><select class="form-control" name="searchtype"><option value="college">College</option>
      <option value="course">Courses<option>
    </select>
  </div> -->

<div class="input-group" style="width:400px;">

     <input type="text" class="form-control" id="suggestion" autocomplete="off" name="suggestion" onkeyup="search_func(this.value)" placeholder="Search for...">
     

     <span class="input-group-btn"> 

       <input type="submit" class="backcolr uppercase" id="searchsubmit" value="Search">
     </span>
   </div>
<div  id="search"></div>
<div class="col-md-2"></div>

</form>
            </div>
            <!-- Password Protected End -->
        </div>
    </div>

          </div>
          </div>
        </div>



<!-- <div class="row" style="margin-top:100px;">
  <div class="col-lg-3"></div>
  <div class="col-lg-6">
<div class="input-group">
  
      <input type="text" class="form-control" id="suggestion"  placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Search!</button>
      </span>
    </div>
</div>
</div>
<div class="row" style="margin-top:100px;">
  <div class="col-lg-3"></div>
  <div class="col-lg-6">
<div id="search">
  
     
    </div>
</div>
</div> -->
  <!-- <img style="margin:100px 500px;" src="<?php //echo Config::get('app.baseurl'); ?>images/NFlogo.png" alt="netfunda"> -->

<div class="clear"></div>

    <div id="main" role="main">
        <!-- Container Start -->
            <div class="container">
                <!-- Row Start -->
                <div class="row">
                                                            <div class="col-md-9 ">
                        <div class="rich_editor_text"></div>     

<div class="element_size_100">
                        <header class="cs-heading-title">
                            <h2 class="cs-section-title">News</h2>                                                                                </header>
                                            <div class="our_courses">
                        



<div class="tabs vertical">

<ul class="nav nav-tabs" id="myTab">
<li class=" active"><a data-toggle="tab" href="#tab11">Latest News</a></li>
<li class=""><a data-toggle="tab" href="#tab12">Admission Notice</a></li>
<li class=""><a data-toggle="tab" href="#tab13">Exam Notice</a></li>
<li class=""><a data-toggle="tab" href="#tab14">Results</a></li>
<li class=""><a data-toggle="tab" href="#tab15">Employment</a></li>
<li class=""><a data-toggle="tab" href="#tab16">Scholarships</a></li>
</ul>

<div class="tab-content">

<div class="tab-pane fade in  active" id="tab11">
<div class="widget widget-latest-event fullwidth">
<article>
<div class="text">
<h6><a href="article_details.php?id=2036" class="colrhvr">IBPS PO/MT 2015 Exam Interview Call Letter</a></h6>
<time datetime="2015-01-02">Jan 02, 2015</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2030" class="colrhvr">Sarva UP Gramin Bank Recruitment 2015: 417 Officer &amp; Office Assistant Posts</a></h6>
<time datetime="2014-12-31">Dec 31, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2016" class="colrhvr">NABARD Recruitment 2015 : 128 Assistant Manager Post</a></h6>
<time datetime="2014-12-29">Dec 29, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2003" class="colrhvr">All India Banking Jobs</a></h6>
<time datetime="2014-12-26">Dec 26, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2002" class="colrhvr">IBPS SO Exam 2015 Tips &amp; Tricks</a></h6>
<time datetime="2014-12-26">Dec 26, 2014</time>
</div>
</article>
</div>
</div>  
<div class="tab-pane fade in " id="tab12">
<div class="widget widget-latest-event fullwidth">
<article>
<div class="text">
<h6><a href="article_details.php?id=2043" class="colrhvr">UP PSC Regional Inspector (Technical) Examination 2014 Notification Released</a></h6>
<time datetime="2015-01-02">Jan 02, 2015</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2042" class="colrhvr">UPSC NDA &amp; NA Exam (II) 2014 (Written) Result Declared</a></h6>
<time datetime="2015-01-02">Jan 02, 2015</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2041" class="colrhvr">MP PSC State Forest Service Exam 2014: 123 Posts</a></h6>
<time datetime="2015-01-02">Jan 02, 2015</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2040" class="colrhvr">ILBS Recruitment 2015: Apply Online for 290 Teaching &amp; Non-Teaching Posts</a></h6>
<time datetime="2015-01-02">Jan 02, 2015</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2039" class="colrhvr">Haryana Postal Circle Recruitment 2015: 74 Postman and MTS Posts</a></h6>
<time datetime="2015-01-02">Jan 02, 2015</time>
</div>
</article>
</div>
</div>
<div class="tab-pane fade in " id="tab13">
<div class="widget widget-latest-event fullwidth">
<article>
<div class="text">
<h6><a href="article_details.php?id=2008" class="colrhvr">UPSC NDA (I) 2015 Exam Application Form Released</a></h6>
<time datetime="2014-12-27">Dec 27, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1968" class="colrhvr">Indian Army Recruitment 2014: 437 Vacancies</a></h6>
<time datetime="2014-12-18">Dec 18, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1927" class="colrhvr">AP Police Recruitment 2014: 32 Posts</a></h6>
<time datetime="2014-12-12">Dec 12, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1912" class="colrhvr">Indian Navy Recruitment 2014: Sailors Post through Sports Quota Entry</a></h6>
<time datetime="2014-12-10">Dec 10, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1900" class="colrhvr">CRPF Recruitment 2014: 2293 Constable (Technical/Tradesmen) Posts</a></h6>
<time datetime="2014-12-08">Dec 08, 2014</time>
</div>
</article>
</div>
</div>
<div class="tab-pane fade in " id="tab14">
<div class="widget widget-latest-event fullwidth">
<article>
<div class="text">
<h6><a href="article_details.php?id=1906" class="colrhvr">Eastern Railway Sports Quota Recruitment 2014</a></h6>
<time datetime="2014-12-09">Dec 09, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1849" class="colrhvr">RRB Junior Engineer Admit Card 2014 JE/SSE Hall Ticket</a></h6>
<time datetime="2014-11-29">Nov 29, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1718" class="colrhvr">RRB Recruitment 2014 – 951 Vacancies</a></h6>
<time datetime="2014-11-01">Nov 01, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1640" class="colrhvr">RRB Recruitment CEN 03/2014 Published</a></h6>
<time datetime="2014-10-11">Oct 11, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1638" class="colrhvr">SCRA 2015 Official Notification Published by UPSC</a></h6>
<time datetime="2014-10-11">Oct 11, 2014</time>
</div>
</article>
</div>
</div>
<div class="tab-pane fade in " id="tab15">
<div class="widget widget-latest-event fullwidth">
<article>
<div class="text">
<h6><a href="article_details.php?id=2038" class="colrhvr">SSC Junior Engineer Exam 2014 (Paper-II) Admit Card Issued</a></h6>
<time datetime="2015-01-02">Jan 02, 2015</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2014" class="colrhvr">OSSC Recruitment 2015: 173 Auditor Posts</a></h6>
<time datetime="2014-12-29">Dec 29, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1993" class="colrhvr">Odisha SSC Recruitment 2014: 94 Revenue Inspector &amp; Amins Posts</a></h6>
<time datetime="2014-12-23">Dec 23, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1992" class="colrhvr">SSC Junior Engineer 2014 Paper-II Exam Date Announced</a></h6>
<time datetime="2014-12-23">Dec 23, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1991" class="colrhvr">SSC CGL 2013 Interview Call Letter</a></h6>
<time datetime="2014-12-23">Dec 23, 2014</time>
</div>
</article>
</div>
</div>
<div class="tab-pane fade in " id="tab16">
<div class="widget widget-latest-event fullwidth">
<article>
<div class="text">
<h6><a href="article_details.php?id=2029" class="colrhvr">Tripura PSC Recruitment 2014 : 72 Posts</a></h6>
<time datetime="2014-12-31">Dec 31, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2021" class="colrhvr">MPPSC State Service Exam 2014: 591 Posts</a></h6>
<time datetime="2014-12-29">Dec 29, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2013" class="colrhvr">MPPSC State Engineering Service Exam 2014 : 371 Asst Engineer Posts</a></h6>
<time datetime="2014-12-29">Dec 29, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=2006" class="colrhvr">Chhattisgarh PSC State Engineering Services Exam 2014: 117 Posts</a></h6>
<time datetime="2014-12-26">Dec 26, 2014</time>
</div>
</article><article>
<div class="text">
<h6><a href="article_details.php?id=1984" class="colrhvr">Chhattisgarh State Services Exam 2014 Notification Issued</a></h6>
<time datetime="2014-12-22">Dec 22, 2014</time>
</div>
</article>
</div>
</div>
</div>
</div>



                        </div>
                  </div> 

  <div class="element_size_100">
                        <header class="cs-heading-title">
                            <h2 class="cs-section-title">Top Exams</h2>                                                                                </header>
                                            <div class="our_courses">
                            <ul>
                                                              <li>
                                    <article style="background-color: #8a9045">
                                        <h5><a href="#" class="colrhovr">CAT - 2014</a></h5>
                                        <span class="course-program"> View Results                                        </span>
                                                                            </article>
                                </li>
                                                              <li>
                                    <article style="background-color: #3e769a">
                                        <h5><a href="#">MAT - 2015</a></h5>
                                                                                <span class="course-program"> 
                    View Notifications                                       </span>                                    </article>
                                </li>
                                                              <li>
                                    <article style="background-color: #7d7b7b">
                                        <h5><a href="#" class="colrhovr">JEE - 2014</a></h5>
                                                                                <span class="course-program"> 
                    Results Expected on 14th Jan 2015                                       </span>                                    </article>
                                </li>
                                                              <li>
                                    <article style="background-color: #8f3931">
                                        <h5><a href="#" class="colrhovr">CBSE AIPMT - 2015</a></h5>
                                                                                <span class="course-program"> 
                   Test on 3rd Mar, 2015                                       </span>                                    </article>
                                </li>
                                                              <li>
                                    <article style="background-color: #a88b60">
                                        <h5><a href="#" class="colrhovr">NDA - 2015</a></h5>
                                                                                <span class="course-program"> 
                    Last Date - 23rd Jan, 2015                                       </span>                                    </article>
                                </li>
                                                              <li>
                                    <article style="background-color: #c16622">
                                        <h5><a href="#" class="colrhovr">JEE Advanced - 2015</a></h5>
                                                                                <span class="course-program"> 
                    Test on May 24th, 2015                                        </span>                                    </article>
                                </li>
                                                          </ul>
                        </div>
                  </div> 

                      <div class="element_size_100">
    <header class="cs-heading-title">
          <h2 class="cs-section-title float-left">Latest blogs</h2></header>  <div class="postlist blog blog-medium lightbox">
      <!-- Blog Start -->
                        <!-- Blog Post Start -->
                    <article class="post-2788 post type-post status-publish format-standard has-post-thumbnail hentry category-nature tag-illustration tag-interface tag-minimal tag-ministry-of-education cls-post-image">
                       <figure><a href="education-standard-in-europe/index.html"><img src="<?php echo Config::get('app.baseurl'); ?>images/uploads/2014/01/01-stat-fort-uni-230x172.jpg" alt=""></a>
                    <figcaption>
                      <a class="btnreadmore bgcolr" href="#"> <em class="fa fa-long-arrow-right"></em>
                      </a>
                    </figcaption></figure>                        <!-- Blog Post Thumbnail End -->
                        <div class="blog_text webkit">
                                                  <div class="text">
                              <h2 class="heading-color cs-post-title"> 
                                  <a href="education-standard-in-europe/index.html" class="colrhvr">
                  Education Standard in Europe                                    </a>
                                </h2>
                                     <ul class="post-options">
                                        <li>
                                            <i class="fa fa-user"></i>
                                            <a href="author/admin/index.html">Julia Andreson</a>                                        </li>
                                        
    <li class="featured">Featured</li>
                                              <li>
                                         <i class="fa fa-list"></i><a href="category/nature/index.html" rel="tag">Nature</a>                                </li></ul>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie, velit id luctus scelerisque, justo nulla dignissim nulla, vel semper lorem ligula vehicula felis. Donec posuere scelerisque elit, eget blandit tortor scelerisque non. Aliquam et lacus... <a href="education-standard-in-europe/index.html" class="cs-read-more colr">read more</a></p>
                                                         </div>
                         </div>
                     </article>
                                                               <!-- Blog Post End -->
                                      <!-- Blog Post Start -->
                    <article class="post-2787 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-science tag-help-the-world tag-ipeople tag-minimal tag-ngo-life cls-post-image">
                       <figure><a href="choosing-the-paths-of-life/index.html"><img src="<?php echo Config::get('app.baseurl'); ?>images/uploads/2014/01/02-stat-fort-uni-230x172.jpg" alt=""></a>
                    <figcaption>
                      <a class="btnreadmore bgcolr" href="#"> <em class="fa fa-long-arrow-right"></em>
                      </a>
                    </figcaption></figure>                        <!-- Blog Post Thumbnail End -->
                        <div class="blog_text webkit">
                                                  <div class="text">
                              <h2 class="heading-color cs-post-title"> 
                                  <a href="choosing-the-paths-of-life/index.html" class="colrhvr">
                  Choosing the paths of life.                                    </a>
                                </h2>
                                     <ul class="post-options">
                                        <li>
                                            <i class="fa fa-user"></i>
                                            <a href="author/admin/index.html">Julia Andreson</a>                                        </li>
                                                                              <li>
                                         <i class="fa fa-list"></i><a href="category/blog/index.html" rel="tag">Blog</a>, <a href="category/science/index.html" rel="tag">Science</a>                                 </li></ul>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie, velit id luctus scelerisque, justo nulla dignissim nulla, vel semper lorem ligula vehicula felis. Donec posuere scelerisque elit, eget blandit tortor scelerisque non. Aliquam et lacus... <a href="choosing-the-paths-of-life/index.html" class="cs-read-more colr">read more</a></p>
                                                         </div>
                         </div>
                     </article>
                                                               <!-- Blog Post End -->
                                      <!-- Blog Post Start -->
                    <article class="post-2786 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-our-story tag-grunge tag-interface tag-ipeople tag-ngo-life cls-post-video">
                       <figure><iframe width="500" height="172" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&amp;url=http%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F3035584&amp;show_artwork=true&amp;maxwidth=500&amp;maxheight=172"></iframe></figure>                        <!-- Blog Post Thumbnail End -->
                        <div class="blog_text webkit">
                                                  <div class="text">
                              <h2 class="heading-color cs-post-title"> 
                                  <a href="whats-up-with-the-microbiologoy/index.html" class="colrhvr">
                  What’s up with the Microbiologoy.                                    </a>
                                </h2>
                                     <ul class="post-options">
                                        <li>
                                            <i class="fa fa-user"></i>
                                            <a href="author/ricky/index.html">Ricky Price</a>                                        </li>
                                                                              <li>
                                         <i class="fa fa-list"></i><a href="category/blog/index.html" rel="tag">Blog</a>, <a href="category/our-story/index.html" rel="tag">Our Story</a>                                 </li></ul>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras molestie, velit id luctus scelerisque, justo nulla dignissim nulla, vel semper lorem ligula vehicula felis. Donec posuere scelerisque elit, eget blandit tortor scelerisque non. Aliquam et lacus... <a href="whats-up-with-the-microbiologoy/index.html" class="cs-read-more colr">read more</a></p>
                                                         </div>
                         </div>
                     </article>
                                         <div class="modal fade" id="myModal2786" tabindex="-1" role="dialog" aria-hidden="true"></div>
                                                              <!-- Blog Post End -->
                                    <!-- Blog End -->
                </div>  </div>                 </div>
                                        <aside class="col-md-3">
                                    <div class="widget widget_categories"><header class="cs-heading-title"><h2 class="cs-section-title">Study Abroad</h2></header>    <ul>
  <li class="cat-item"><a href="#">United States</a> <img src="<?php echo Config::get('app.baseurl'); ?>images/flags/us.gif" alt="Study in United States">
</li>
  <li class="cat-item"><a href="#">Canada</a>  <img src="<?php echo Config::get('app.baseurl'); ?>images/flags/ca.gif" alt="Study in Canada">
</li>
  <li class="cat-item"><a href="#">Australia</a>  <img src="<?php echo Config::get('app.baseurl'); ?>images/flags/au.gif" alt="Study in Australia">
</li>
  <li class="cat-item"><a href="#">United Kingdom</a>  <img src="<?php echo Config::get('app.baseurl'); ?>images/flags/uk.gif" alt="Study in United Kingdom">
</li>
  <li class="cat-item"><a href="#">Germany</a>  <img src="<?php echo Config::get('app.baseurl'); ?>images/flags/ga.gif" alt="Study in Germany">
</li>
<li class="cat-item"><a href="#">Singapore</a>  <img src="<?php echo Config::get('app.baseurl'); ?>images/flags/sg.gif" alt="Study in Singapore">
</li>
<li class="cat-item"><a href="#">New Zealand</a>  <img src="<?php echo Config::get('app.baseurl'); ?>images/flags/nz.gif" alt="Study in New Zealand">
</li>
    </ul>
</div>        <div class="widget widget_text">      <div class="textwidget"><a href="index.html"><img src="<?php echo Config::get('app.baseurl'); ?>images/img-wi1.jpg" alt=""></a></div>
    </div>                             </aside>                                               
                         
             </div>
            <!-- Row End -->
        </div>
  </div>

   <div class="element_size_100">

    <!-- Logo Slide Start -->

    <div class="our-sponcers">

        
             <header class="cs-heading-title">

                <h2 class="cs-section-title cs-heading-color">Institute Showcase</h2>

            </header> 

        
        <div class="container">

        <div id="container" class="fullwidth">

            <div class="flexslider">



            

            <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides lightbox" style="width: 1400%; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(0px, 0px, 0px);">

                                                <li style="width: 153px; float: left; display: block;">
                                  <a href="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/6-logo.png" target="_self" data-rel="prettyPhoto[gallery2]" rel="prettyPhoto[gallery2]">
                  <img src="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/6-logo.png" alt="">                                    </a>

                                </li>

                                                                <li style="width: 153px; float: left; display: block;">
                                  <a href="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/4-logo.png" target="_self" data-rel="prettyPhoto[gallery2]" rel="prettyPhoto[gallery2]">
                  <img src="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/4-logo.png" alt="">                                    </a>

                                </li>

                                                                <li style="width: 153px; float: left; display: block;">
                                  <a href="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/3-logo.png" target="_self" data-rel="prettyPhoto[gallery2]" rel="prettyPhoto[gallery2]">
                  <img src="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/3-logo.png" alt="">                                    </a>

                                </li>

                                                                <li style="width: 153px; float: left; display: block;">
                                  <a href="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/1-logo.png" target="_self" data-rel="prettyPhoto[gallery2]" rel="prettyPhoto[gallery2]">
                  <img src="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/1-logo.png" alt="">                                    </a>

                                </li>

                                                                <li style="width: 153px; float: left; display: block;">
                                  <a href="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/5-logo.png" target="_self" data-rel="prettyPhoto[gallery2]" rel="prettyPhoto[gallery2]">
                  <img src="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/5-logo.png" alt="">                                    </a>

                                </li>

                                                                <li style="width: 153px; float: left; display: block;">
                                  <a href="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/4-logo.png" target="_self" data-rel="prettyPhoto[gallery2]" rel="prettyPhoto[gallery2]">
                  <img src="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/4-logo.png" alt="">                                    </a>

                                </li>

                                                                <li style="width: 153px; float: left; display: block;">
                                  <a href="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/3-logo.png" target="_self" data-rel="prettyPhoto[gallery2]" rel="prettyPhoto[gallery2]">
                  <img src="<?php echo Config::get('app.baseurl'); ?>images/uploads/2013/12/3-logo.png" alt="">                                    </a>

                                </li>

                                
            

            </ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev cs-bgcolrhvr" href="#">Previous</a></li><li><a class="flex-next cs-bgcolrhvr" href="#">Next</a></li></ul></div>

        </div>

        </div>

         
        <script type="text/javascript">
             jQuery(window).load(function(){
         jQuery('.our-sponcers .flexslider').flexslider({
          animation: "slide",
          itemWidth: 153,
          itemMargin: 5,
          start: function(slider) {
            jQuery('body').removeClass('loading');
      
        }
        });
             });

        </script>

    <!-- Logo Slide End -->

    </div>

</div>         




<script language="javascript">
function search_func(value)
{

 var str=value.length;
 if(str>0)
  {
  $.get("checklist/"+value,function(data){
    console.log(data);
     $("#search").html(data);
  });
}
else{
  $("#search").empty();
}
}
// $("#suggestion").on('keyup',function(){
//  var value=$(this).val();
//  $.get("checklist/"+value,function(data){
//    console.log(data);
//     $("#search").append(data);
//   });

// });

</script>

 <script type="text/javascript">
//   $(function(){
//      $('#myGallery').galleryView();
//    });
 </script>
 @stop