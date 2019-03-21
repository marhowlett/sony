<?php
/**
 * The template for displaying the footer
 *
 */
?>
<?php if ( woodmart_needs_footer() ): ?>
	<?php if ( ! woodmart_is_woo_ajax() ): ?>
		</div><!-- .main-page-wrapper --> 
	<?php endif ?>
		</div> <!-- end row -->
	</div> <!-- end container -->
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
<footer >
        <div class="contenedor">

            <div class="grid">
            <div class="col">
             <h3>© 2018 Todos los derechos reservados</h3>
           </div>
           <div class="col">
             <h3>Soluciones Web: <a href="https://esbrillante.mx/">EsBrillante</a></h3>
           </div>
            </div>
            </div>
            
 </footer>
<?php endif ?>
</div> <!-- end wrapper -->
<div class="woodmart-close-side"></div>
<?php wp_footer(); ?>
</body>
</html>