<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bde
 */

?>

	</div><!-- #content -->	
	<footer  id="colophon" class="site-footer bg-dark">
		<div class="max-width">
			<div class="fb">
				<div class="fi">
					<div class="logo"></div>
					<!--<div><a href="#">Privacy Policy</a></div>
					<div><a href="#">Terms of Use</a></div>-->			
				</div>	
				<div class="fi">
					<h2>FIND US AROUND THE WEB</h2>
					<?php include('_social_media.php') ?>
				</div>		
				<div class="fi">
					<h2>MAIL TO</h2>
					<p>
						<?php 
						$option1 = get_theme_mod('bde_address1', 'P.O. Box 123456');
						$option2 = get_theme_mod('bde_address2', 'San Diego, CA 92109');
						if (!empty($option1)) {
							echo $option1;
						}
						if (!empty($option2)) {
							echo '<br />'.$option2;
						}
						?>
					</p>
				</div>			
			</div>
		</div>
		<div class="copyright bg-darker">			
			Copyright <i class="far fa-copyright"></i> BlueDotEducation.org <?php echo date("Y"); ?>			
		</div>
	</div>

	<?php /*
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bde' ) ); ?>">
				<?php
				printf( esc_html__( 'Proudly powered by %s', 'bde' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bde' ), 'bde', '<a href="http://underscores.me/">Ralph Nevchas</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	*/ ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
