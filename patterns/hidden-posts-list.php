<?php
/**
 * Title: Posts list
 * Slug: fieldnote/hidden-posts-list
 * Inserter: no
 * Description: Single-column list of posts, inheriting the template's query.
 *
 * @package Fieldnote
 * @since 1.0.0
 */

?>
<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"color":"var:preset|color|base-2","width":"1px","style":"solid"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--base-2);border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-date {"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":32,"textColor":"contrast-2"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:pattern {"slug":"fieldnote/hidden-no-results"} /-->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
