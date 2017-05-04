<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry single_art medium-4 columns'); ?>>
	<div class="theimage" style="background-image:url(<?php echo the_post_thumbnail_url() ?>)">
		<div class="datecase"><?php echo get_the_date('j F'); ?></div>
	</div>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
	<div class="entry-content">
		<?php the_excerpt() ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
    <div class="viewmore">
        <a href="<?php the_permalink() ?>">Lire la suite <i class="fa fa-long-arrow-right"></i></a>
    </div>
</div>
