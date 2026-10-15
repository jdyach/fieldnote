<?php
/**
 * Title: About: image and text
 * Slug: fieldnote/about
 * Categories: fieldnote, about, media
 * Keywords: about, story, media, image, text
 * Viewport Width: 1400
 * Description: Media and Text block pairing an illustration with a short studio story, on the Sage section style.
 *
 * @package Fieldnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-sage","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"anchor":"work"} -->
<div id="work" class="wp-block-group alignfull is-style-section-sage" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:media-text {"align":"wide","mediaType":"image","mediaWidth":44,"verticalAlignment":"center","imageFill":false} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center" style="grid-template-columns:44% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/field-study.webp' ) ); ?>" alt="<?php esc_html_e( 'Abstract composition of cream, terracotta and gold shapes on a sage green field.', 'fieldnote' ); ?>"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"className":"is-style-eyebrow"} -->
<h2 class="wp-block-heading is-style-eyebrow"><?php esc_html_e( 'About the studio', 'fieldnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Small team, long memory.', 'fieldnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Fifteen years of agency and in-house work taught us that the best websites are the ones people can actually maintain. Every build ships with documentation, editable patterns and a walkthrough for whoever runs it next.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'We keep the roster small on purpose, so you always talk to the person writing the code.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact"><?php esc_html_e( 'Say hello', 'fieldnote' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group -->
