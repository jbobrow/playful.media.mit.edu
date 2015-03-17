<?php
/**
 * @package Make
 */

$footer_text   = get_theme_mod( 'footer-text', false );

/**
 * Allow toggling of the footer credit.
 *
 * @since 1.2.3.
 *
 * @param bool    $show    Whether or not to show the footer credit.
 */
$footer_credit = apply_filters( 'make_show_footer_credit', true );
?>

<?php if ( $footer_text || ttfmake_is_preview() ) : ?>
<div class="footer-text">
	<?php echo ttfmake_sanitize_text( $footer_text ); ?>
</div>
<?php endif; ?>

<?php if ( true === $footer_credit ) : ?>
<div class="site-info">
	<span class="theme-name">Site by </span>
	<span class="theme-author">
		<a title="Jonathan Bobrow is my homeboy" href="https://jonathanbobrow.com/">
			Jonathan Bobrow</a>
		<span>  | Theme </span>
		<a title="The Theme Foundry pimped out a bit" href="https://thethemefoundry.com/">Make</a>
	</span>
</div>
	<span class="footer-address">MIT Media Lab  Room E14-474 75  Amherst Street  Cambridge, MA</span>
<?php endif; ?>
