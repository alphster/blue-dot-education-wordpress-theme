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
					<h2>MAIL TO</h2>
					<p>
						P.O. Box 72982<br />
						San Diego, CA 92109
					</p>
				</div>
				<div class="fi">
					<h2>FIND US AROUND THE WEB</h2>
					<div class="social-media">
						<a class="circle twitter" href="https://twitter.com">
							<i class="fab fa-twitter"></i>
						</a>
						<a class="circle instagram" href="https://instagram.com">
							<i class="fab fa-instagram"></i>
						</a>												
						<a class="circle facebook" href="https://facebook.com">
							<i class="fab fa-facebook-f"></i>
						</a>						
						<a class="circle linkedin" href="https://linkedin.com">
							<i class="fab fa-linkedin-in"></i>
						</a>						
					</div>
				</div>		
				<div class="fi">
					<h2>TODO</h2>
					<p></p>
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
