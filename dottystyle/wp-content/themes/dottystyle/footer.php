<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Dottystyle
 * @since Dottystyle 1.0
 */
?>

	</div><!-- #main -->
    <div class="line2"></div>
	<footer id="colophon" role="contentinfo">
        <div class="footer-right">
            <p><a href="#"  title="Terms & Condition">Terms & Condition</a>   |   <a href="#"  title="Privacy Policy">Privacy Policy</a>   |  <a href="#"  title="Sitemap">Sitemap</a> <br/>Copyright © 2011 Easy Remote Online. </p>
        </div>
 
        <div class="footer-left"><strong>Follow us on</strong>
            <ul>
                <li><a href="#" title="Youtube"><img src="<?php bloginfo('template_url') ?>/images/icon-youtube.jpg" alt="Youtube" /></a></li>
                <li><a href="#" title="Facebook"><img src="<?php bloginfo('template_url') ?>/images/icon-facebook.jpg" alt="Facebook" /></a></li>
                <li><a href="#" title="Twitter"><img src="<?php bloginfo('template_url') ?>/images/icon-twitter.jpg" alt="Twitter" /></a></li>
            </ul>
        </div>
 
        <div class="clear">
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
