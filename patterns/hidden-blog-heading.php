<?php
/**
 * Title: Blog heading
 * Slug: fieldnote/hidden-blog-heading
 * Inserter: no
 * Description: Intro heading for the blog index.
 *
 * @package Fieldnote
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"760px"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"className":"is-style-eyebrow","textColor":"accent"} -->
<h2 class="wp-block-heading is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'The notebook', 'fieldnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"fontSize":"display"} -->
<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'Notes from the studio', 'fieldnote' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"large"} -->
<p class="has-contrast-2-color has-text-color has-large-font-size"><?php esc_html_e( 'Process write-ups, small experiments and lessons learned building for the web.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
