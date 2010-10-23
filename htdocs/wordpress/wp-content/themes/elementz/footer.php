<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
    <div class="logo"></div>
		<div id="colophon">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
      <div class="map">
        <a href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=1599+Central+Pkwy,+Cincinnati,+OH+45214+(elementz)&sll=39.113312,-84.521148&sspn=0.008008,0.014752&ie=UTF8&hq=&hnear=1599+Central+Pkwy,+Cincinnati,+Hamilton,+Ohio+45214&z=17&iwloc=r0" alt="Get Directions"><img src="<?php bloginfo('template_directory'); ?>/images/google_map.png" /></a>
      </div>
      <div class="contact">
        <p id="site-info">
          <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </p><!-- #site-info -->
        <p>1599 Central Parkway</p>
        <p>Cincinnati, OH 45214</p>
      </div>
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

		</div><!-- #colophon -->
    <div id="site-generator">
      <?php do_action( 'twentyten_credits' ); ?>
      <a href="<?php echo esc_url( __('http://wordpress.org/', 'twentyten') ); ?>"
          title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'twentyten'); ?>" rel="generator">
        <?php printf( __('Proudly powered by %s.', 'twentyten'), 'WordPress' ); ?>
      </a>
    </div><!-- #site-generator -->
	</div><!-- #footer -->
</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
