<?php
/*
Template Name: Artists
 */
get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-content">



                    <?php $artists = getUsersByRole('artist'); foreach ($artists as $artistId) : ?>
                    <?php $artist = get_userdata($artistId); ?>

					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( $artist->user_email , apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), $artist->display_name ); ?></h2>
							<?php echo $artist->description; ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( $artist->ID ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), $artist->display_name ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->

                    <?php endforeach; ?>

						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php /*comments_template( '', true );*/ ?>

<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
