<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div class="blog_post_style">
		<?php the_post_thumbnail("full"); ?>
						<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

			endwhile; // End of the loop.
			?>
          </div>
            <div class="blog_sidebar">
               	<div class="blog_posts_sb latest_posts_blog">
				<h2>Latest Blog</h2>
				<?php dynamic_sidebar(10); ?>
                </div>
                <div class="blog_arch_sb blog_archive">
                <?php dynamic_sidebar(11); ?>
                </div>
                <div class="fb_w_sb fb_sidebar">
                <h2>FIND US FACEBOOK</h2>
                <?php dynamic_sidebar(13); ?>
                </div>
             </div>
             <div class="clear"></div>
		</main><!-- #main -->
	</div><!-- #primary -->
	
</div><!-- .wrap -->

<?php get_footer(); 
