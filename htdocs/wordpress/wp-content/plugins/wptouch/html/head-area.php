<?php global $wptouch_settings; ?>
<?php global $bnc_wptouch_version; ?>

<div class="metabox-holder" id="wptouch-head">
	<div class="postbox">
		<div id="wptouch-head-colour">
			<div id="wptouch-head-title">
				<?php WPtouch(); ?>
				<img class="ajax-load" src="<?php echo compat_get_plugin_url('wptouch'); ?>/images/admin-ajax-loader.gif" alt="ajax"/>
			</div>
				<div id="wptouch-head-links">
					<ul>
						<li><?php echo sprintf(__( "%sGet WPtouch Pro%s", "wptouch" ), '<a href="http://www.bravenewcode.com/products/wptouch-pro/?utm_source=wptouch&utm_medium=web&utm_campaign=top-' . str_replace( '.', '', $bnc_wptouch_version ) . '" target="_blank">','</a>'); ?> | </li>
						<li><?php echo sprintf(__( "%sBNC on Twitter%s", "wordtwit" ), '<a href="http://www.twitter.com/bravenewcode" target="_blank">','</a>'); ?> | </li>
						<li><?php echo sprintf(__( "%sBraveNewCode.com%s", "wptouch" ), '<a href="http://www.bravenewcode.com" target="_blank">','</a>'); ?></li>
					</ul>
				</div>
	<div class="bnc-clearer"></div>
			</div>

		<div id="wptouch-news-support">

			<div id="wptouch-news-wrap">
			<h3><span class="rss-head">&nbsp;</span><?php _e( "WPtouch Wire", "wptouch" ); ?></h3>
				<div id="wptouch-news-content">

				</div>
			</div>

			<div id="wptouch-support-wrap">
			<h3>&nbsp;</h3>
				<div id="wptouch-support-content">
				<p id="find-out-more"><a href="http://www.bravenewcode.com/products/wptouch-pro/?utm_source=wptouch&utm_medium=web&utm_campaign=find-out-more-<?php echo str_replace( '.', '', $bnc_wptouch_version ); ?>" target="_blank"><?php _e( "Find Out More &rsaquo;", "wptouch" ); ?></a></p>
				</div>
			</div>

		</div><!-- wptouch-news-support -->

	<div class="bnc-clearer"></div>
	</div><!-- postbox -->
</div><!-- wptouch-head -->
