<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>Allure Dental SPA</title>
<link href="<?php bloginfo('template_directory'); ?>/images/fav_icon.png" type="text/css" rel="shortcut icon" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/jquery_files/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/jquery_files/font-awesome-4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,600,700,900" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
<script src="<?php bloginfo('template_directory'); ?>/jquery_files/js/jquery_1.11.1_jquery.min.js" type="text/jscript"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/jquery_files/slick/slick.min.js" type="text/javascript"></script>

<script type="text/jscript">

$(document).ready(function(e) {
	
$('.img_gal_block .wpb_single_image a').addClass('wplightbox');
	
  $("#btn_toggle").click(function(e) {
       $(this).toggleClass('on');
	   $(".navigation_block").slideToggle("normal");
        
      });
    
	 $(".bxSlider1").bxSlider({
	   
	        mode:'horizontal', //mode: 'fade',            
            speed:1000,
            //auto:true,
			autoHover:true,
            infiniteLoop:true,
            hideControlOnEnd:true,
            useCSS:false,
			controls:false,
			pager:true
		   });
	
   $('.slicker1').slick({
	  centerMode:false,
	  draggable:false,
	  arrows:true,
	  //autoplay:true,
      autoplaySpeed:1500,
	  slidesToShow:4,
	  slidesToScroll:1,
	  responsive: [
				   {
				     breakpoint:1000,
				     settings: {
					    slidesToShow:3
					
				     }
				  },
				  {
				     breakpoint:768,
				     settings: {
					    slidesToShow:2
					
				     }
				  },
				  {
				     breakpoint:600,
				     settings: {
					    slidesToShow:1
					
				     }
				  }
				  
				 ]
	});
  
	
	
	$('.slicker2').slick({
	  centerMode:false,
	  draggable:false,
	  arrows:true,
	  //autoplay:true,
      autoplaySpeed:1500,
	  slidesToShow:1,
	  slidesToScroll:1
				 
	});
	
	 $('.slicker3').slick({
	  centerMode:false,
	  draggable:false,
	  arrows:true,
	  //autoplay:true,
      autoplaySpeed:1500,
	  slidesToShow:2,
	  slidesToScroll:1,
	  responsive: [
				   
				  {
				     breakpoint:767,
				     settings: {
					    slidesToShow:1
					
				     }
				  }
				  
				 ]
	}); 
	
    $("#godown").click(function(e) {
		e.preventDefault();
		var section = $(this).attr("href");
		$("html, body").animate({
			scrollTop: $(section).offset().top
		});
	});

});
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<header id="masthead" class="site-header" role="banner">

<!--====================HEADER=======================-->
<div class="mainhead"><!--Start head portion -->         
            
              <div class="head_top"><!-- Start head_top -->
                 <div class="Mycontainer"><!-- Start Mycontainer -->
                         <div class="site_logo"><?php dynamic_sidebar(1); ?></div><!-- Site logo -->
                         <button class="btn_toggle" id="btn_toggle" title="Menu"><span></span></button>
                         <div class="navigation_block"> <!-- Start navigation_block --> 
                            <div class="hd_cnt_info">
                               <?php dynamic_sidebar(17); ?><!-- Header Contact Info --> 
                            </div> 
                            <?php $args=array('menu'=>'Primary_Menu','container_class'=>'main_nav'); ?>
                            <?php wp_nav_menu($args); ?><!-- Primary_Menu -->
                     
                          </div> <!-- Start navigation_block --> 
                          <div class="clr"></div> 
                </div><!-- End Mycontainer -->
              </div><!-- End head_top -->
               
      </div><!-- End head Portion-->

<!--====================BANNER=======================-->
<div class="banner_wrapper"><!-- Start banner_wrapper -->
    
    <?php if ( is_front_page() )   : ?>
        <div class="banner_slider"><!-- Start banner_slider -->
              <ul class="bxSlider1">
                   
                <?php
                     if( have_rows('slider_images') ):
                     while ( have_rows('slider_images') ) : the_row(); 
                 ?>
                <li>
                      
                     <img src="<?php the_sub_field('banner_slider_image'); ?>" />
                
                </li>
                <?php endwhile; endif; wp_reset_query(); ?>
             </ul>
            
           <div class="banner_content"><!-- Start banner_content -->
                 
                      <?php dynamic_sidebar(18); ?><!-- Main Banner Text -->  
                                                 
           </div><!-- End banner_content --> 
       </div><!-- End banner_slider -->
       
    <?php endif; ?>
    <?php if ( !is_front_page() )   : ?>
    	<div class="inner_banner_image"><?php if(function_exists('show_media_header')){ show_media_header(); } ?></div>
        
        
     <?php endif; ?>
     
     <a href="#Myfooter" id="godown" class="godown"></a>
</div><!-- End banner_wrapper -->
</header>
		<div id="content" class="site-content">
