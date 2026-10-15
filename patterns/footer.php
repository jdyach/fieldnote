<?php
/**
 * Title: Footer
 * Slug: fieldnote/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Dark footer with site title, tagline, navigation, search and copyright.
 *
 * @package Fieldnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-ink","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50"},"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-ink" style="margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"2.5rem"}}} /-->

<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"className":"is-style-eyebrow"} -->
<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Explore', 'fieldnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":2,"className":"is-style-eyebrow"} -->
<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'Search', 'fieldnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'fieldnote' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search the notes…', 'search form placeholder', 'fieldnote' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'fieldnote' ); ?>","buttonUseIcon":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"wide","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}}} -->
<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--40)"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> &middot; <?php esc_html_e( 'Built with the Fieldnote block theme', 'fieldnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php
	/* Translators: %s: WordPress link. */
	printf( esc_html__( 'Proudly powered by %s', 'fieldnote' ), '<a href="' . esc_url( __( 'https://wordpress.org', 'fieldnote' ) ) . '">WordPress</a>' );
?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
