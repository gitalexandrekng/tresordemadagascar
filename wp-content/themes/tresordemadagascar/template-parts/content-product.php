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

<div id="post-<?php the_ID(); ?>" <?php post_class('medium-3 columns end'); ?>>
	<div class="case_article">
		<div class="the_img" style="background-image:url(<?php the_post_thumbnail_url()?>)"></div>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    	<div class="entry-content">
    		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
			<?php echo $loop->get_price_html(); ?>
    	</div>
    	<footer>
    		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
    	</footer>
	</div>
</div>
