<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php 
				/* Start the Loop */ 
				$countDracula=0;
				while ( have_posts() ) : the_post(); 
				?>
					<?php 
						$countDracula++;
						if ($countDracula == 1 || $countDracula == 2 || $countDracula == 3 || $countDracula == 4) :
					 ?>
							<?php if ($countDracula == 1 ) : ?>
								<section id='home-section-one' class='home-section-one home-section'>
							<?php endif; ?>
								<a class='post-a-wrap a-post-<?php the_ID() ?> a-post-order-<?php echo $countDracula; ?>' href='<?php the_permalink(); ?>' title='<?php the_title(); ?>' alt='<?php the_title(); ?>'>
									<article id="post-<?php the_ID() ?>" class="post recent-post post-<?php the_ID() ?> post-order-<?php echo $countDracula; ?>">
										<?php if ( has_post_thumbnail() ) {the_post_thumbnail('post-thumbnail');} else { ?>
											<img width='470px' height='415px' src="<?php echo get_stylesheet_directory_uri(); ?>/no-img-1024x737.png" alt="<?php the_title(); ?>" />
										<?php } ?>
										<header class="entry-header">
											<h1 class="entry-title"><?php the_title(); ?></h1>
										</header>
									</article>
								</a>
							<?php if ($countDracula == 4 ) : ?>
								</section>
							<?php endif; ?>
						<?php else : ?>
							<?php if ($countDracula == 5 ) : ?>
								<section id='home-section-two' class='home-section-two home-section'>
							<?php endif; ?>
								<a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>' alt='<?php the_title(); ?>'>
									<article id="post-<?php the_ID() ?>" class="post post-<?php the_ID() ?> post-order-<?php echo $countDracula; ?>">
										<?php if ( has_post_thumbnail() ) {the_post_thumbnail('full');} else { ?>
											<img width='960px' height='531px' src="<?php echo get_stylesheet_directory_uri(); ?>/no-img-1024x737.png" alt="<?php the_title(); ?>" />
										<?php } ?>
										<header class="entry-header">
											<h1 class="entry-title"><?php the_title(); ?></h1>
										</header>
										<?php
											the_excerpt()
										?>
									</article>
								</a>
							<?php //sizeof($posts) is equal to the amount of posts in the blogroll
								if ($countDracula == sizeof($posts) ) : ?>
								</section>
							<?php endif; ?>

					<?php endif; ?>
				<?php endwhile; ?>

				<?php twentytwelve_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">

					<?php if ( current_user_can( 'edit_posts' ) ) :
						// Show a different message to a logged-in user who can add posts.
					?>
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
						</header>

						<div class="entry-content">
							<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
						</div><!-- .entry-content -->

					<?php else :
						// Show the default message to everyone else.
					?>
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
						</header>

						<div class="entry-content">
							<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					<?php endif; // end current_user_can() check ?>

				</article><!-- #post-0 -->

			<?php endif; // end have_posts() check ?>

		<section id='home-section-three' class='home-section-three home-section'>
		<?php get_sidebar(); ?>
		</section>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>