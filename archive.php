<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wedge
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php
				// Get data for current post author
				$curauth = get_userdata( $post->post_author );
			?>

			<header class="page-header <?php if ( is_author() && ( $curauth->description ) ) { echo 'profile'; } ?>">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							_e( 'Category / ', 'wedge' );
							single_cat_title();

						elseif ( is_tag() ) :
							_e( 'Tag / ', 'wedge' );
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( '<span>Author /</span> %s', 'wedge' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day / %s', 'wedge' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month / %s', 'wedge' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'wedge' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year / %s', 'wedge' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'wedge' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'wedge' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'wedge');

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'wedge');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'wedge' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'wedge' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'wedge' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'wedge' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'wedge' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'wedge' );

						else :
							_e( 'Archives', 'wedge' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<!-- If author has a bio, show it. -->
			<?php if ( is_author() ) { ?>
				<?php if ( $curauth->description ) { ?>
					<header class="author-info">
							<div class="author-profile">
								<div class="author-avatar">
									<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'wedge_author_bio_avatar_size', 100 ) ); ?>
								</div>

								<div class="author-description">
									<h2><?php printf( __( 'Posts by %s', 'wedge' ), get_the_author() ); ?></h2>
									<?php the_author_meta( 'description' ); ?>
								</div>
							</div>
					</header><!-- author-info -->
				<?php } ?>
			<?php } ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php wedge_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
