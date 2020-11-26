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

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="sydney-svg-icon"><?php sydney_get_svg_icon( 'icon-chevron-up', true ); ?></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container text-center">
		<!-- this is a custom footer by Wadiya Ali -->
		<div class="row">
			<div class="col-md-6 col-6">
			<a href="<?php echo esc_url( __( 'https://wadiyaAli/', 'Wadiya' ) ); ?>"><?php printf( __( 'Designed by Wadiya Ali. &copy Copyrights Saim Solutions 2020.', '' ), 's' ); ?></a>
			</div><div style="padding-right:100px;" class="col-md-6 col-6"><span class="material-icons text-white px-4">facebook
</span><i class="fab fa-2x fa-linkedin px-4"></i><i class="far fa-2x fa-envelope px-4"></i></div>	

	</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
