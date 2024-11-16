<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			Escola de Educação Infantil Voando Alto <?php echo date("Y"); ?>
			<span class="sep"> | </span>
			Todos os direitos reservados.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
