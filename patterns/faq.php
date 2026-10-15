<?php
/**
 * Title: FAQ
 * Slug: fieldnote/faq
 * Categories: fieldnote, text
 * Keywords: faq, questions, accordion, details
 * Viewport Width: 1400
 * Description: Frequently asked questions using native Details blocks (no JavaScript).
 *
 * @package Fieldnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e( 'Questions, answered', 'fieldnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'How long does a typical site take?', 'fieldnote' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Most marketing sites take four to eight weeks from kickoff to launch, depending on content and the number of templates.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Will I be able to edit the site myself?', 'fieldnote' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Yes. Everything is built from block patterns and global styles, so you can change copy, images and even layouts in the Site Editor.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Do you work with existing sites?', 'fieldnote' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Often. We can audit a classic theme and plan a gradual move to blocks, or improve what you have without a full rebuild.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'What does a care plan include?', 'fieldnote' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Updates, daily backups, uptime monitoring and a small monthly bank of hours for edits and fixes.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->
