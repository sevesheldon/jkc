<?php
/**
 * Template Name: Sidebar Page
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
				 <?php while ( have_posts() ) : the_post(); ?> 
                 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'josephketner' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                        </div><!-- .entry-content -->
    
                        <footer class="entry-meta">
                            <?php edit_post_link( __( 'Edit', 'josephketner' ), '<span class="edit-link">', '</span>' ); ?>
                        </footer><!-- .entry-meta -->
                    </article><!-- #post -->
                <?php endwhile; ?>
            </div>
            <div class="contant-area-right">
				<?php dynamic_sidebar('Sidebar Inner Pages'); ?>
            </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>