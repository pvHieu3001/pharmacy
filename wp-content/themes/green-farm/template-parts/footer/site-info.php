<?php
/**
 * Displays footer site info
 *
 * @subpackage Green Farm
 * @since 1.0
 * @version 1.4
 */

?>

<div class="site-info py-4 text-center">
	<?php
		echo esc_html( get_theme_mod( 'organic_farm_footer_text' ) );

		printf(
            /* translators: %s: Green Farm WordPress Theme. */
            esc_html__( ' %s ', 'green-farm' ),
            '<a target="_blank" href="' . esc_url( 'https://www.ovationthemes.com/wordpress/free-green-farm-wordpress-theme/' ) . '"> Green Farm WordPress Theme</a>'
        );
	?>
</div>
