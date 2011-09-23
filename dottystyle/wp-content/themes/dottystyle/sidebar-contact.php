<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Dottystyle
 * @since Dottystyle 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];
if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area roundlight contacts" role="complementary">
            <h3 class="lubal">Write to Us</h3>
            <div class="section write">
                <p><strong>Easy Remote Online Pty Limited</strong><br/>
                Suite 202, 5 Alexander Street<br/>
                Crows Nest NSW 2065
                Australia</p>
            </div>
            <h3 class="lubal">Talk To Us</h3>
            <div class="section number">
                <dl>
                    <dd>+61 2 8880 4060 <strong>(Main Line)</strong></dd>
                    <dd>+61 2 8880 4054<strong>(Support)</strong></dd>
                    <dd>+61 2 8880 4055 <strong>(Fax)</strong></dd>
                </dl>
            </div>
            <div class="section mail">
                <p><strong>General Enquiries</strong>
                <a class="button" href="#">email</a>
                </p>
            </div>
            <div class="section mail">
                <p><strong>Support</strong>
                <a class="button" href="#">email</a>
                </p>
            </div>
            <div class="section">
                <img src="<?php bloginfo('template_url') ?>/images/map.jpg"/>
            </div>
			<?php #if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
				<!--<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php #wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>-->

			<?php #endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>
