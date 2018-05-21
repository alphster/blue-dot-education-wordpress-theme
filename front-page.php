<?php
/**
 * The template for displaying front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bde
 */

function divider() {
	echo "<div class=\"ray-dot\"><div></div><div></div></div>";
}

get_header();
?>
	<div class="hero-content">
		<div class="cover"></div>
		<div class="max-width">

		</div>
	</div>

	<div class="intro-header section-header bg-none">
		<div class="max-width">
			<div>
				<div class="title">
					What are we about?
				</div>
				<?php divider(); ?>
				<p>
					These are the things that makes Blue Dot Education tick. Something said about overall mission and goals. Lorem ipsum dolor
					sit amet, cum no placerat antiopam dignissim, vis eu vide natum partiendo, est postea reprimique no. Cu vis mollis vituperatoribus.
				</p>
			</div>
		</div>
	</div>

	<div class="intro-content">
		<div class="max-width">

		</div>
	</div>

	<div class="news-header section-header bg-blue">
		<div class="max-width">
			<div>
				<div class="title">
					What have we been up to?
				</div>
				<?php divider(); ?>
				<div>
					Catch up with Blue Dot Education! Read our latest posts or browse our photos on instagram.
				</div>
			</div>
		</div>
	</div>

	<div class="news-content">
		<div class="max-width">

		</div>
	</div>	

	<div class="team-header section-header bg-green">
		<div class="max-width">
			<div>
				<div class="title">
					Meet the team!
				</div>
				<?php divider(); ?>
				<div>
					Catch up with Blue Dot Education! Read our latest posts or browse our photos on instagram.
				</div>
			</div>
		</div>
	</div>

	<div class="team-content">
		<div class="max-width">

		</div>
	</div>

	<div class="program-header section-header bg-red">
		<div class="max-width">
			<div>
				<div class="title">
					Our programs and projects
				</div>
				<?php divider(); ?>
				<div>
					Catch up with Blue Dot Education! Read our latest posts or browse our photos on instagram.
				</div>
			</div>
		</div>
	</div>

	<div class="contact-header section-header bg-yellow">
		<div class="max-width">
			<div>
				<div class="title">
					Let's get in touch!
				</div>
				<?php divider(); ?>
				<div>
					These are the things that makes Blue Dot Education tick. Something said about overall mission and goals. Lorem ipsum dolor
					sit amet, cum no placerat antiopam dignissim, vis eu vide natum partiendo, est postea reprimique no. Cu vis mollis vituperatoribus.
				</div>
			</div>
		</div>
	</div>

	<div class="contact-content">
		<div class="max-width">

		</div>
	</div>

	<?php
get_footer();