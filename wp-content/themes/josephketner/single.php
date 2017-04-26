<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Joseph_Ketner
 * @since Joseph Ketner 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php josephketner_post_nav(); ?>
				<?php /*?><?php comments_template(); ?><?php */?>

			<?php endwhile; ?>




		</div><!-- #content -->
	</div><!-- #primary -->

 
<?php get_footer(); ?>