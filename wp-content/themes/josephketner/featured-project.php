<?php
/**
 * Template Name: Featured Project
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
         <?php while ( have_posts() ) : the_post(); ?>
                <header class="entry-header">
					                    
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header><!-- .entry-header -->
        <?php endwhile; ?> 
        <div class="contant-area-left">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php while ( have_posts() ) : the_post(); ?>
                     
                    <div class="give-page-content">					
				
          			 <?php the_content(); ?> 
					</div><!-- .entry-header -->
				<?php endwhile; ?>
            
            <ul class="blog-listing-gallery">
          <?php
			  $recentPosts = new WP_Query();
			  $recentPosts->query('cat=7');
         ?>
          <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
          <li>
            <div class="blog-post-img"><?php
                $feat_image = wp_get_attachment_url( get_post_thumbnail_id( $recentPosts->ID ) );
				$src = wp_get_attachment_image_src( get_post_thumbnail_id( $recentPosts->ID ), array('260','170') );
			?>
                <img src="<?php echo $src[0];?>" alt="<?php echo $feat_image;?>" class="news-thumb" />
             </div> 
            <div class="container-post-text"> 
            	<a class="latest-post-title" href="<?php the_permalink(); ?>">
              	<?php the_title(); ?>
              	</a>
              <?php the_excerpt(); ?>
              <div class="get_info"><a class="read-more" href="<?php the_permalink($recentPosts->ID) ?>">Read More</a></div>
            </div>
          </li>
          
          <?php endwhile; ?>
        </ul>
        </article>
       </div>
        <div class="contant-area-right">
            <?php dynamic_sidebar('Sidebar Inner Pages'); ?>
        </div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>