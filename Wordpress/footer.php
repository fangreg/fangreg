<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after the main content area and sidebar
 *
 * @package Maxwell
 */

?>

	</div><!-- #content -->

	<?php do_action( 'maxwell_before_footer' ); ?>

	<div id="footer" class="footer-wrap">

		<footer id="colophon" class="site-footer container clearfix" role="contentinfo">

			<?php do_action( 'maxwell_footer_menu' ); ?>

			<div id="footer-text" class="site-info">
                Thème enfant créer par <b>FANIE GRÉGOIRE</b>
			</div><!-- .site-info -->

		</footer><!-- #colophon -->

	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
