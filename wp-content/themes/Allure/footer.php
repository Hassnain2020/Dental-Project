<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
<!--====================FOOTER=======================-->			

 <div class="Myfooter" id="Myfooter"><!-- Start Myfooter -->
       
        
          <div class="footer_top"><!-- Start footer_top -->
               <div class="Mycontainer"><!-- Start Mycontainer -->            
                  <div class="ft_block ft_block1">
                  
                         <?php dynamic_sidebar(4); ?><!-- footer menu1 -->
                  
                  </div>
                  <div class="ft_block ft_block2">
                     <?php dynamic_sidebar(14); ?><!-- footer Office Houres Block -->
                  
                  </div>
                  <div class="ft_block ft_block3">
                    <?php dynamic_sidebar(8); ?><!-- footer menu3 (Social Icons) -->
                  
                  </div>
                  <div class="ft_block ft_block4">
                    <?php dynamic_sidebar(6); ?> <!-- footer menu4 (Contact Info) -->                    
                  </div>
              </div> <!-- End Mycontainer -->                   
          </div><!-- End footer_top -->
          <div class="footer_bottom"><!-- Start footer_bottom -->
              <div class="Mycontainer"><!-- Start Mycontainer -->
                 
                  <div class="copy_text">
                   <?php dynamic_sidebar(7); ?><!-- Copy Right Text -->
                  </div>
                  <?php dynamic_sidebar(15); ?><!-- Footer Terms-Conditions Menu -->
                  <div class="clr"></div>                            
           
             </div> <!-- End Mycontainer --> 
          </div><!-- End footer_bottom -->
          
         
      </div><!-- End Myfooter -->
            
            
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
