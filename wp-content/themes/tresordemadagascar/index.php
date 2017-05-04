<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<section class="announces">
    <div class="row">
        <div class="small-12 columns">
            <div class="ann">
                <div class="gray">50% de réduction sur une sélection d'articles</div>
                <div class="blue">La nouvelle collection est arrivée</div>
            </div>
            <div class="owl-carousel owl-theme sliderz">
                <div class="item" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/slide_a.jpg)">
                    <div class="txt">
                        <h3>Apprenez en plus sur la faune de Madagascar</h3>
                    </div>
                </div>
                <div class="item" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/slide_b.jpg)">
                    <div class="txt">
                        <h3>Découvrez Madagascar et ses paysages</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="last_articles">
    <div class="row">
        <div class="small-12 columns">
            <h2 class="titre_page"><span>Manufacture de chez nous</span></h2>
            <h4><span>Découvez les derniers articles fais par nos soins</span></h4>
        </div>
    </div>
    <div class="row listing_last_products">
        <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'orderby' =>'date', 'order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
        ?>
            <div class="medium-3 columns end" style="position:relative">
                <div class="content_case">
                    <a class="case_article" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="the_img" style="background-image:url(<?php the_post_thumbnail_url()?>)"></div>
                        <div class="title"><?php the_title(); ?></div>
                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                        <div class="hidded_txt"><?php the_excerpt() ?> ceci est un super produit de qualité trop bien</div>
                    </a>
                    <div class="text-center">
                        <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>
    <div class="row">
        <div class="small-12 columns">
            <div class="btn_go_btc">
                <div class="line"></div>
                <a href="" class="custombutton">Consultez la boutique entière <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="cats">
    <div class="row">
        <div class="medium-4 columns">
            <a href="" class="case_cat">
                <div class="theimg" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/category_a.jpg)"></div>
                <div class="the_cat">Chapeaux</div>
            </a>
        </div>
        <div class="medium-4 columns">
            <a href="" class="case_cat">
                <div class="theimg" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/category_b.jpg)"></div>
                <div class="the_cat">Panier / sacs</div>
            </a>
        </div>
        <div class="medium-4 columns">
            <a href="" class="case_cat">
                <div class="theimg" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/images/category_c.jpg)"></div>
                <div class="the_cat">Bijoux</div>
            </a>
        </div>
    </div>
</section>

<section class="selection">
    <div class="row">
        <div class="small-12 columns">
            <div class="title_selection">
                <span>Nos meilleures ventes</span>
            </div>
            <div class="desc">
                Ces produits ont séduit à nos clients.<br>Nous sommes sûrs que vous aussi !
            </div>
        </div>
    </div>
    <div class="row">
        <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'orderby' =>'date', 'order' => 'DESC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); global $product;
        ?>
            <div class="medium-3 columns end" style="position:relative">
                <div class="content_case">
                    <a class="case_article" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="the_img" style="background-image:url(<?php the_post_thumbnail_url()?>)"></div>
                        <div class="title"><?php the_title(); ?></div>
                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>
    <div class="row bouts">
        <div class="small-12 columns">
            <a href="#" class="custombutton">Voir la boutique <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</section>

<div class="parallax-container middle-para">
    <div class="row">
        <div class="medium-6 columns">
            <div class="titre">Les terres de Madagascar</div>
            <div class="txt">Madagascar, en forme longue la République de Madagascar, en malgache Madagasikara et Repoblikan'i Madagasikara, est un État insulaire d'Afrique constitué d'une grande île de l'océan Indien que le canal de Mozambique sépare du reste du continent. C’est la cinquième plus grande île du monde après l'Australie, le Groenland, la Nouvelle-Guinée et Bornéo. Longue de 1 580 km et large de 580 km, Madagascar couvre une superficie de 587 000 km2. Sa capitale est Antananarivo3 et le pays a pour monnaie l'ariary. Le pays est entouré par d'autres îles et archipels dont l'île Maurice, les Seychelles, les Comores et La Réunion.</div>
        </div>
        <div class="medium-6 columns"></div>
    </div>
    <div class="parallax"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/coconut.jpg"></div>
</div>

<div id="page" role="main">

	<article class="main-content row">
        <div class="title_selection">
            <span>Le journal du site</span>
        </div>
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content-home', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>

	</article>

</div>

<?php get_footer();
