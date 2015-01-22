<?php
// echo "<pre>";

//  print_r($menus);
?>


	  
	<div id="loginheader" class="fullwidth" style="text-align: right;">
<div class="container">
      <i class="fa fa-lock"></i> <a href="#">Login</a> | <i class="fa fa-user"></i> <a href="#">Create Account</a> | <i class="fa fa-briefcase"></i> <a href="#">Institution Login</a></div></div>
	  
			<!-- Main Header -->
	
			<div id="mainheader" class="fullwidth" style="z-index: 1000; position: relative; top: 5px;">
            
          
	
				<div class="container">
	
					<div id="logo" class="float-left">		<a href="index.php">
        	        	<a href="<?php echo Config::get('app.baseurl'); ?>"><img src="<?php echo Config::get('app.baseurl'); ?>images/NFlogo.png" alt="netfunda"></a>
        	        </a>

	 </div>					<!-- Right Header -->
	
					<div id="rightheader" class="flaot-right">
																		
						<!-- SearcH Area -->
			
						<form action="search" id="searchform" method="post" role="search">
	
						<div class="searcharea float-right">
	
							<a href="#searchbox" class="btnsearch"><em class="fa fa-search"></em></a>
	
							<div id="searchbox" style="display: none;">
	
								<input type="text" name="s" value="Search for:"><button type="submit" class="bgcolr"><em class="fa fa-search"></em></button>
	
							</div>
	
						</div>
	
						</form>
	
						<!-- SearcH Area Close-->
						
												
						<!-- Navigation  -->
	
						<nav class="navigation float-right">
<ul id="menus">

<?php 
	 foreach ($menus as $menuhead => $menuitems) { 
           if (!is_array($menuitems['sub_menu']) || empty($menuitems['sub_menu'])) { ?>
            <li id="" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
							<a href="<?php if($menuitems['menu_name']=='Home') {echo Config::get('app.baseurl');} else{echo "#";} ?>"><?php echo $menuitems['menu_name']; ?></a>
						</li>
						<?php

						}else{ ?>


            
						 <li id="" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
							<a href=""><?php echo $menuitems['menu_name']; ?></a>
							<ul class="sub-menu">
								<?php   foreach ($menuitems['sub_menu'] as $items => $value) { 

								if (array_key_exists('country_name', $value)) { ?>

									<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
									
									<?php if(isset($value['sub_sub_menu']) || !empty($value['sub_sub_menu'])){

									 ?>
									<a href="#"><?php echo $value['country_name']; ?></a>
									<ul class="sub-menu">

									<?php   foreach ($value['sub_sub_menu'] as $sub_items => $sub_value) { ?>
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="<?php echo Config::get('app.baseurl'); ?>abroadcollegelist/<?php echo $value['country_name'].'/'.$sub_value->course_id; ?>"><?php echo $sub_value->course_name; ?></a>
								</li>
								<?php } ?> </ul> <?php }else{ ?>
								<a href="<?php echo Config::get('app.baseurl'); ?>abroadcollegelist/<?php echo $value['course_id']; ?>"><?php echo $value['course_name']; ?></a> <?php } ?>
								</li>
											
									<?php	}
										else{

									?>

								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
									
									<?php if(isset($value['sub_sub_menu']) || !empty($value['sub_sub_menu'])){

									 ?>
									<a href="#"><?php echo $value['course_name']; ?></a>
									<ul class="sub-menu">

									<?php   foreach ($value['sub_sub_menu'] as $sub_items => $sub_value) { ?>
								<li class="menu-item menu-item-type-post_type menu-item-object-page">
									<a href="<?php echo Config::get('app.baseurl'); ?>collegelist/<?php echo $sub_value['course_id']; ?>"><?php echo $sub_value['course_name']; ?></a>
								</li>
								<?php } ?> </ul> <?php }else{ ?>
								<a href="<?php echo Config::get('app.baseurl'); ?>collegelist/<?php echo $value['course_id']; ?>"><?php echo $value['course_name']; ?></a> <?php } ?>
								</li>



								<?php } } ?> </ul>

								<?php } }?>

</ul>
<select class="selectnav" id="selectnav1">
	<option value="">Menu</option>
	<option value="http://www.kampuzz.com/index.php" selected="">Home</option>
	
	<option value="http://www.kampuzz.com/courses.php?id=5905">-- Online MBA</option>
</select>
</nav>						<!-- Navigation Close -->
	
						
	
					</div>
	
					<!-- Right Header Close -->
	
	
	
				</div>
	
			</div>
			<div style="display: none; width: 1202px; height: 112px; float: left;"></div>
	
			<!-- Main Header Close -->
	
	

		<script>
$(function() {

	// grab the initial top offset of the navigation 
	var sticky_navigation_offset_top = $('#mainheader').offset().top;
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) { 
			$('#mainheader').addClass('scroll-to-fixed-fixed');
			$('#mainheader').css({ 'position': 'fixed','z-index': 1000, 'top':0, 'left':0, 'margin-left': 0, 'width': 1200});
		} else {
			$('#mainheader').removeClass('scroll-to-fixed-fixed');

			$('#mainheader').css({ 'z-index': 1000,'position': 'relative','top':5 }); 
		}   
	};

	// run our function on load
	sticky_navigation();
	
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_navigation();
	});
	
	// NOT required:
	// for this demo disable all links that point to "#"
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); 
	});
	
});
</script>		   


