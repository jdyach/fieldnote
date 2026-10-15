<?php
/**
 * Title: 404
 * Slug: fieldnote/hidden-404
 * Inserter: no
 * Description: Page not found content.
 *
 * @package Fieldnote
 * @since 1.0.0
 */

?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"className":"is-style-eyebrow","textColor":"accent"} -->
<h2 class="wp-block-heading is-style-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Error 404', 'fieldnote' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":1,"fontSize":"display"} -->
<h1 class="wp-block-heading has-display-font-size"><?php esc_html_e( 'This page wandered off.', 'fieldnote' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e( 'The link may be broken or the page may have moved. Searching usually finds it.', 'fieldnote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_attr_x( 'Search', 'search form label', 'fieldnote' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Search the site…', 'search form placeholder', 'fieldnote' ); ?>","buttonText":"<?php echo esc_attr_x( 'Search', 'search button text', 'fieldnote' ); ?>"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/notebook.webp' ) ); ?>" alt="" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
