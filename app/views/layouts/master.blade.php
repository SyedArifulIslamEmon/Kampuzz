<!doctype html>
<html>
<head>
    @section('head')
         <?php //$baseurl="http://ajay.dev.netfunda.com/shiksha/public/" ; ?>

    <meta charset="UTF-8">
    <title>Kampuzz - Welcome to Kampuzz.com </title>
    
    
              
    <link rel="shortcut icon" href="<?php echo Config::get('app.baseurl'); ?>images/favicon.png">
    <link rel="stylesheet" id="style_css-css" href="<?php echo Config::get('app.baseurl'); ?>css/style2f54.css?ver=4.1" type="text/css" media="all">
    <link rel="stylesheet" id="prettyPhoto_css-css" href="<?php echo Config::get('app.baseurl'); ?>/css/prettyphoto2f54.css?ver=4.1" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap_css-css" href="<?php echo Config::get('app.baseurl'); ?>css/bootstrap2f54.css?ver=4.1" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome_css-css" href="<?php echo Config::get('app.baseurl'); ?>css/font.css?ver=4.1" type="text/css" media="all">
    <link rel="stylesheet" id="widget_css-css" href="<?php echo Config::get('app.baseurl'); ?>css/widget.css?ver=4.1" type="text/css" media="all">


    <link rel="stylesheet" id="responsive_css-css" href="<?php echo Config::get('app.baseurl'); ?>css/responsive2f54.css?ver=4.1" type="text/css" media="all">



<script src="<?php echo Config::get('app.baseurl'); ?>js/jquery-2.0.3.min.js"></script>
<script src="<?php echo Config::get('app.baseurl'); ?>js/bootstrap.min.js"></script>

<style>
body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}
 
.fadein { 
position:relative; height:300px; width:70%; margin:0 auto;

 }
.fadein img { position:absolute;}


/*========================================================================*/
/*   04. Auto Suggestion
/*========================================================================*/

.vmenu{list-style-type:none;
    margin:5px 0 0 0;
    padding:0px;
    height:150px;}

.vmenu li{background:#333 no-repeat right top;
        font:bold 13px "Lucida Grande","Trebuchet MS",verdana;
        display:block;
        color:white;
        width:auto;
        padding:5px 0;
        text-indent:8px;
        border-bottom:1px solid black;
        text-decoration:none;
        }

.vmenu li:hover{background-color:red;
        color:black;
        border-bottom:1px solid red;}
</style>

 


    @show
</head>
<body class="home page page-id-6491 page-template-default">
<div class="wrapper wrapper_boxed" id="wrappermain-pix">

    <header id="header" class="headermain fullwidth">
         @yield('menu')
        
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
       @section('footer')
         <div id="footer-widgets" class="fullwidth">
                <!-- Container Start -->
                <div class="container">
                    <!-- Footer Widgets Start -->
                    

<div class="widget widget_categories"><header class="cs-heading-title"><h2 class="cs-section-title">Career Options</h2></header>    <ul>
    
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/1">Science &amp; Engineering</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/44">Banking &amp; Finance</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/58">Arts, Law, Languages and Teaching</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/63">Information Technology</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/99">Medicine, Beauty &amp; Health Care</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/104">Management</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/214">Media, Films &amp; Mass Communication</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/385">Design</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/480">Animation, Visual Effects, Gaming &amp; Comics (AVGC)</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/788">Retail</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/936">Hospitality, Aviation &amp; Tourism</a></li>

 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/career/1555">Test Preparation</a></li>

   </ul>
</div>
    <div class="widget widget_categories"><header class="cs-heading-title"><h2 class="cs-section-title">Study Abroad</h2></header>    <ul>
  <li class="cat-item"><a href="#">United States</a> <img src="http://ajay.dev.netfunda.com/kampuzz/public/images/flags/us.gif" alt="Study in United States">
</li>
  <li class="cat-item"><a href="#">Canada</a>  <img src="http://ajay.dev.netfunda.com/kampuzz/public/images/flags/ca.gif" alt="Study in Canada">
</li>
  <li class="cat-item"><a href="#">Australia</a>  <img src="http://ajay.dev.netfunda.com/kampuzz/public/images/flags/au.gif" alt="Study in Australia">
</li>
  <li class="cat-item"><a href="#">United Kingdom</a>  <img src="http://ajay.dev.netfunda.com/kampuzz/public/images/flags/uk.gif" alt="Study in United Kingdom">
</li>
  <li class="cat-item"><a href="#">Germany</a>  <img src="http://ajay.dev.netfunda.com/kampuzz/public/images/flags/ga.gif" alt="Study in Germany">
</li>
<li class="cat-item"><a href="#">Singapore</a>  <img src="http://ajay.dev.netfunda.com/kampuzz/public/images/flags/sg.gif" alt="Study in Singapore">
</li>
<li class="cat-item"><a href="#">New Zealand</a>  <img src="http://ajay.dev.netfunda.com/kampuzz/public/images/flags/nz.gif" alt="Study in New Zealand">
</li>
    </ul>
</div>
<div class="widget widget_categories"><header class="cs-heading-title"><h2 class="cs-section-title">Government Jobs</h2></header>    <ul>
  
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/1">Recruitments</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/2">MBA Entrance</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/3">Banking</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/5">Defence</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/6">Railways</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/7">Staff Selection Committee</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/8">State PSC</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/10">UPSC</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/11">Technical</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/55">Medical</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/56">Results</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
 
<li class="cat-item"><a href="http://ajay.dev.netfunda.com/kampuzz/public/articles/71">Law</a></li>
<!-- <li class="cat-item"><a href="articles.php?id=56">Results</a></li>
<li class="cat-item"><a href="articles.php?id=3">Banking</a></li>
<li class="cat-item"><a href="articles.php?id=5">Defence</a></li>
<li class="cat-item"><a href="articles.php?id=71">Law</a></li>
<li class="cat-item"><a href="articles.php?id=2">MBA Entrance</a></li>
<li class="cat-item"><a href="articles.php?id=55">Medical</a></li>
<li class="cat-item"><a href="articles.php?id=6">Railways</a></li>
<li class="cat-item"><a href="articles.php?id=7">Staff Selection Committee</a></li>
<li class="cat-item"><a href="articles.php?id=8">State PSC</a></li>
<li class="cat-item"><a href="articles.php?id=11">Technical</a></li>
<li class="cat-item"><a href="articles.php?id=10">UPSC</a></li>   -->
  </ul>
</div>

<div class="widget widget-recent-blog"><header class="cs-heading-title"><h2 class="cs-section-title">Latest Blogs</h2></header>
        <!-- Recent Posts Start -->

            
                  <!-- Upcoming Widget Start -->

                  <article class="">

                    
                      

                        <figure>
                            <a class="fa fa-hover" href="choosing-the-paths-of-life/index.html">
                            <img src="http://ajay.dev.netfunda.com/kampuzz/public/images/uploads/2014/01/02-stat-fort-uni-150x150.jpg" alt="" width="60">
                        </a>
                    </figure>
                                             

                                            <div class="text">

                                              <h6><a class="colrhvr" href="choosing-the-paths-of-life/index.html">Choosing the paths of life.</a></h6>  

                                                <time datetime="2013-08-22">August 22, 2013</time>

                                            </div>

                       

                    
                  </article>                 

                
                  <!-- Upcoming Widget Start -->

                  <article class="">

                    
                      

                        <figure>
                            <a class="fa fa-hover" href="whats-up-with-the-microbiologoy/index.html">
                            <img src="http://ajay.dev.netfunda.com/kampuzz/public/images/uploads/2014/01/03-stat-fort-uni-150x150.jpg" alt="" width="60">
                            </a>
                    </figure>
                                             

                                            <div class="text">

                                              <h6><a class="colrhvr" href="whats-up-with-the-microbiologoy/index.html">What’s up with the Microbiol...</a></h6> 

                                                <time datetime="2013-08-22">August 22, 2013</time>

                                            </div>

                       

                    
                  </article>                 

                
                  <!-- Upcoming Widget Start -->

                  <article class="">

                    
                      

                        <figure>
                            <a class="fa fa-hover" href="stuyding-music-at-academy/index.html">
                                <img src="http://ajay.dev.netfunda.com/kampuzz/public/images/uploads/2014/01/04-stat-fort-uni-150x150.jpg" alt="" width="60">
                            </a></figure>
                                             

                                            <div class="text">

                                              <h6><a class="colrhvr" href="stuyding-music-at-academy/index.html">Stuyding music at Academy.</a></h6>  

                                                <time datetime="2013-08-22">August 22, 2013</time>

                                            </div>

                       

                    
                  </article>                 

                
              
          <!-- Recent Posts End -->     

        </div>                    <!-- Footer Widgets End -->
                </div>
                <!-- Container End -->
                <footer id="footer">
                    <div class="container">
                                                  <header>
                                <a href="#">
                                    <img src="<?php echo Config::get('app.baseurl'); ?>images/NFlogo.png" alt="Kampuzz">        
                                </a>
                            </header>
                                                <p class="copright">
                            ©2015 Kampuzz.com - All rights reserved 
              <a href="#">Powered by Netfunda Technologies</a>                         
                         </p>
                          <!-- Language Section Start -->

                            <div class="language-sec">

                                <!-- Wp Language Start -->

                                

                                 
                            </div>

                            <!-- Language Section End -->
                        <a class="back-to-top bgcolrhvr" id="btngotop" href="#"><em class="fa fa-chevron-up"></em></a>
                    </div>
                </footer>
              </div>

    @show
    </footer>

</div>
<script type="text/javascript" src="<?php echo Config::get('app.baseurl'); ?>js/jquery.prettyphoto2f54.js?ver=4.1"></script>
<script type="text/javascript" src="<?php echo Config::get('app.baseurl'); ?>js/functions2f54.js?ver=4.1"></script>
<script type="text/javascript" src="<?php echo Config::get('app.baseurl'); ?>js/news-ticker2f54.js?ver=4.1"></script>
<link rel="stylesheet" id="flexslider_css-css" href="<?php echo Config::get('app.baseurl'); ?>css/flexslider2f54.css?ver=4.1" type="text/css" media="all">
<script type="text/javascript" src="<?php echo Config::get('app.baseurl'); ?>js/jquery.flexslider-min2f54.js?ver=4.1"></script>
</body>
</html>
