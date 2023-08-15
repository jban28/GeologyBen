<?php
/**
 * Title: Post Meta
 * Slug: post-date
 * Categories: query
 * Keywords: post meta
 * Block Types: core/template-part/post-date
 */
?>
<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>