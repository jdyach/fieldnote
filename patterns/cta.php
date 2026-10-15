<?php
/**
 * Title: Call to action
 * Slug: fieldnote/cta
 * Categories: fieldnote, call-to-action
 * Keywords: cta, call to action, contact, banner
 * Viewport Width: 1400
 * Description: Full-width call to action on the Clay section style.
 *
 * @package Fieldnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","className":"is-style-section-clay","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"760px"},"anchor":"contact"} -->
<div id="contact" class="wp-block-group alignfull is-style-section-clay" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","fontSize":"display"} -->
<h2 class="wp-block-heading has-text-align-center has-display-font-size"><?php esc_html_e( 'Have a project in mind?', 'fieldnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php esc_html_e( 'Tell us a little about it. We reply to every message within two business days.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.com"><?php esc_html_e( 'Email the studio', 'fieldnote' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
