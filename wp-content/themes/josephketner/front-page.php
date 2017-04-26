<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Tennis_Klub
 * @since Tennis Klub 1.0
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
            <div class="home-page-top-area">
            	<?php the_content(); ?>
            </div>
			<?php endwhile; ?>
			<div class="home-page-bottom-area">                     
                        <div id="wa_chpc_slider">
							<?php
                            $recentPosts = new WP_Query();
                            $recentPosts->query('cat=3');
							?>
							<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>                       
								
										<div class="chpcs_foo_content">
											<span class="chpcs_img">
												<?php
												$feat_image = wp_get_attachment_url( get_post_thumbnail_id( $recentPosts->ID ) );
												$src = wp_get_attachment_image_src( get_post_thumbnail_id( $recentPosts->ID ), array('260','170') );
												?>
												<a href="<?php echo get_page_link(7); ?>"><img src="<?php echo $src[0];?>" alt="<?php echo $feat_image;?>" class="news-thumb" /></a>
											</span>
											<span class="chpcs_title">
												<a href="<?php echo get_page_link(7); ?>"><?php the_title(); ?></a>
											</span>
										</div>									
							<?php endwhile; ?>                       
                    </div>
                        
            	<?php dynamic_sidebar('Home Carousel'); ?>
            </div>
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>