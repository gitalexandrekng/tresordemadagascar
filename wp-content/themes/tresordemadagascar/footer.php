<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<div class="footer_container">
            <div class="reassurance">
                <div class="row">
    		        <div class="medium-3 columns">
    		            <div class="case">
    		                <i class="fa fa-certificate"></i>
                            <div class="t">Authenticité garantie</div>
                            <div class="txt">Tous nos produits sont authentiques, fabriqués et importés directement de Madagascar</div>
    		            </div>
    		        </div>
    		        <div class="medium-3 columns">
    		            <div class="case">
    		                <i class="fa fa-truck"></i>
                            <div class="t">Livraison rapide</div>
                            <div class="txt">Nous travaillons avec des transporteurs reconnus de confiance, afin de livrer dans les meilleurs délais</div>
    		            </div>
    		        </div>
    		        <div class="medium-3 columns">
    		            <div class="case">
    		                <i class="fa fa-credit-card"></i>
                            <div class="t">Paiement sécurisé</div>
                            <div class="txt">Les paiements sont garantis sécurisés avec un large choix de moyens de paiement</div>
    		            </div>
    		        </div>
    		        <div class="medium-3 columns">
    		            <div class="case">
    		                <i class="fa fa-globe"></i>
                            <div class="t">Grand choix de produits</div>
                            <div class="txt">Trésors de madagascar propose le plus large choix d'articles de Madagascar</div>
    		            </div>
    		        </div>
    		    </div>
            </div>
		    <div class="bottom_bottom">
                <div class="row">
    		        <div class="medium-6 columns">
                        <div class="left">
                            <ul>
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
    		        </div>
                    <div class="medium-6 columns">
                        <div class="right">
                            <ul>
                                <li><a href="">Confidentialité</a></li>
                                <li><a href="">Conditions d'utilisation</a></li>
                                <li><a href="">Livraisons et retours</a></li>
                            </ul>
                        </div>
                    </div>
    		    </div>
		    </div>
            <div class="copyr">
                © 2017 Trésors de Madagascar - <a href="#">Mentions légales</a>
            </div>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/protonet/jquery.inview/jquery.inview.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/javascript/init.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/javascript/materialize.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/design.js"></script>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
