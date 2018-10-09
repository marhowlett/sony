<?php
/**
 * The template for displaying the footer
 *
 */
?>
    <?php if ( woodmart_needs_footer() ): ?>
    <?php if ( ! woodmart_is_woo_ajax() ): ?>
    </div>
    <!-- .main-page-wrapper -->
    <?php endif ?>
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    <?php
		$page_id = woodmart_page_ID();
		$disable_prefooter = get_post_meta( $page_id, '_woodmart_prefooter_off', true );
		$disable_footer_page = get_post_meta( $page_id, '_woodmart_footer_off', true );
		$disable_copyrights_page = get_post_meta( $page_id, '_woodmart_copyrights_off', true );
	?>
        <?php if ( ! $disable_prefooter && woodmart_get_opt( 'prefooter_area' ) ): ?>
        <div class="woodmart-prefooter">
            <div class="container">
                <?php echo do_shortcode( woodmart_get_opt( 'prefooter_area' ) ); ?>
            </div>
        </div>
        <?php endif ?>

        <!-- FOOTER -->
        <footer class="footer-container color-scheme-<?php echo esc_attr( woodmart_get_opt( 'footer-style' ) ); ?>">

            <?php
			if ( ! $disable_footer_page && woodmart_get_opt( 'disable_footer' ) ) {
				get_sidebar( 'footer' );
			}
		 ?>
                <?php if ( !$disable_copyrights_page && woodmart_get_opt( 'disable_copyrights' ) ): ?>
                <div class="copyrights-wrapper copyrights-<?php echo esc_attr( woodmart_get_opt( 'copyrights-layout' ) ); ?>">
                    <div class="container">
                        <div class="min-footer">
                            <div class="col-left">
                                <?php if ( woodmart_get_opt( 'copyrights' ) != '' ): ?>
                                <?php echo do_shortcode( woodmart_get_opt( 'copyrights' ) ); ?>
                                <?php else: ?>
                                <p>&copy;
                                    <?php echo date( 'Y' ); ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <?php bloginfo( 'name' ); ?>
                                    </a>.
                                    <?php esc_html_e( 'All rights reserved', 'woodmart' ) ?>
                                </p>
                                <?php endif ?>
                            </div>
                            <?php if ( woodmart_get_opt( 'copyrights2' ) != '' ): ?>
                            <div class="col-right">
                                <?php echo do_shortcode( woodmart_get_opt( 'copyrights2' ) ); ?>
                            </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <?php endif ?>

        </footer>
        <?php endif ?>
        </div>
        <!-- end wrapper -->
        <div class="woodmart-close-side"></div>


        <script>
            (function($) {
                
                var sizeWindow = $( window ).width();
                var stageWidth = 1920;
                
                    if(sizeWindow < 750){
                       
                         $(".slide-1").attr("src",'<?php echo get_stylesheet_directory_uri(); ?>/img/home/slide-1-responsive.jpg');
                        
                         $(".slide-2").attr("src",'<?php echo get_stylesheet_directory_uri(); ?>/img/home/slide-2-responsive.jpg');
                        
                         stageWidth = 650;
                        
                    }

                jQuery(document).ready(function($) {
                    
                    //Ajustar imagenes de los slides para móvil
                    
                    

                    var spriteImages = document.querySelectorAll('.slide-item__image');
                    var spriteImagesSrc = [];

                    for (var i = 0; i < spriteImages.length; i++) {
                        var img = spriteImages[i];
                        spriteImagesSrc.push(img.getAttribute('src'));
                    }

                    var initCanvasSlideshow = new CanvasSlideshow({
                        sprites: spriteImagesSrc,
                        displacementImage: '<?php echo get_stylesheet_directory_uri(); ?>/img/dmaps/2048x2048/clouds.jpg',
                        autoPlay: true,
                        autoPlaySpeed: [10, 3],
                        displaceScale: [200, 70],
                        stageWidth: stageWidth                        
                    });

                    $("canvas").click(function(e) {
                        e.preventDefault();

                        $("html, body").animate({
                            scrollTop: $('#tipo_acuario').offset().top - 150
                        }, 800);

                    })

                });

            })(jQuery);

        </script>


        <?php wp_footer(); ?>

        </body>

        </html>
