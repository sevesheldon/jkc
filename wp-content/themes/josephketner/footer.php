<?php

/**

 * The template for displaying the footer

 *

 * Contains footer content and the closing of the #main and #page div elements.

 *

 * @package WordPress

 * @subpackage Joseph_Ketner

 * @since Joseph Ketner 1.0

 */

?>

			</div><!-- #page -->

        </div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

            <div class="footer-widget-area">

                <div  class="hfeed site">

                    <?php dynamic_sidebar('Footer Widget Area'); ?>

                </div>  

            </div>          

            <div class="site-info">

                <div  class="hfeed site">

                    <?php dynamic_sidebar('Copyright Area'); ?>

                </div>   

            </div><!-- .site-info -->           

		</footer><!-- #colophon -->

	<?php wp_footer(); ?>

 



</body>

</html>