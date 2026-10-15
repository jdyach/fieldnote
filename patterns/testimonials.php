<?php
/**
 * Title: Testimonials
 * Slug: fieldnote/testimonials
 * Categories: fieldnote, testimonials
 * Keywords: testimonials, quotes, reviews, social proof
 * Viewport Width: 1400
 * Description: Two client quotes side by side.
 *
 * @package Fieldnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","className":"is-style-eyebrow","textColor":"accent"} -->
<h2 class="wp-block-heading has-text-align-center is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Kind words', 'fieldnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60","top":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php esc_html_e( 'They rebuilt our site as editable patterns, so our team now launches landing pages in an afternoon instead of filing a ticket.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e( 'Dana R., Marketing Director', 'fieldnote' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:quote -->
<blockquote class="wp-block-quote"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Clear estimates, no surprises, and the handoff docs were better than anything our last agency gave us.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e( 'Marcus T., Nonprofit Founder', 'fieldnote' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
