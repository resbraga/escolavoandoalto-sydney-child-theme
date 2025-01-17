<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sydney
 */
if (!is_user_logged_in()) :
	wp_redirect('http://escolavoandoalto.com.br/area-clientes');
	exit;
endif;
get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="post-wrap" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php sydney_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar();?>
<?php get_footer(); ?>
