<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Sydney
 */

get_header(); ?>

	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h2 class="page-title"><?php _e( 'Oops! Página não encontrada', 'sydney' ); ?></h2>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Parece que nada foi encontrado neste endereço. Tente pesquisar pelo que você procura...', 'sydney' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
