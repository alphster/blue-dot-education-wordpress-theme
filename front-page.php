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

class CoreValue {
    public $foo;
    public $bar;
}

$obj1 = new CoreValue();
$obj1->icon = 'fas fa-flask';
$obj1->title = 'Science';
$obj1->text = 'By focusing our work around science & technology, we foster sharp minds.';

$obj2 = new CoreValue();
$obj2->icon = 'fas fa-rocket';
$obj2->title = 'Exploration';
$obj2->text = 'Education works best when students are inspired by interests and passions.';

$obj3 = new CoreValue();
$obj3->icon = 'fas fa-leaf';
$obj3->title = 'Stewardship';
$obj3->text = 'Let\'s learn and clean up the earth while we\'re at it.';

$obj4 = new CoreValue();
$obj4->icon = 'fas fa-star';
$obj4->title = 'Success?';
$obj4->text = 'Something about success or achievement. Wanted to use yellow.';

$coreValues = array($obj1, $obj2, $obj3, $obj4);

get_header();
?>
	<div class="hero-content">
		<div class="cover"></div>
		<div class="max-width">

		</div>
	</div>

	<div class="news-header section-header bg-none">
		<div class="max-width">
			<div>
				<div class="title">					
					Latest News
				</div>
				<?php divider(); ?>		
				<div>
					Catch up with our latest posts, or check out our instagram gallery.
				</div>		
			</div>
		</div>
	</div>

	<div class="news-content section-content bg-none">
		<div class="max-width">
			<div class="recent-posts">
			<?php
				$args = array( 
					'numberposts' => '8',
					'post_status' => 'publish'
				);
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){					
					$recent_post_id = $recent["ID"];
					$recent_post_date = $recent["post_date"];					
					$recent_post_title = $recent["post_title"];
					$formatted_date = date('l, F j, Y', strtotime($recent_post_date));					
					if ( has_post_thumbnail( $recent["ID"]) ) {
						$featured_image_url = get_the_post_thumbnail_url($recent_post_id, 'medium_large');
					}
					
					echo '
						<div class="post">							
							<div class="date">'.$formatted_date.'</div>		
							<a class="link-wrapper" href="'.get_permalink($recent_post_id).'">			
								<div class="image">																
									<img src="'.get_template_directory_uri().'/assets/4by3pixels.png" />
									<div class="bg-image" style="background-image: url(\''.$featured_image_url.'\')"></div>
									<div class="cover"></div>
								</div>
							</a>
							<div class="title">'.$recent_post_title.'</div>							
						</div>';
				}
				wp_reset_query();
			?>
			</div>
		</div>
	</div>

	<div class="about-header section-header bg-blue">
		<div class="max-width">
			<div>
				<div class="title">
					What are we about?
				</div>
				<?php divider(); ?>
				<div>
					These are the things that makes Blue Dot Education tick. Something said about overall mission and goals. Lorem ipsum dolor
					sit amet, cum no placerat antiopam dignissim, vis eu vide natum partiendo, est postea reprimique no. Cu vis mollis vituperatoribus.
				</div>
			</div>
		</div>
	</div>

	<div class="about-content section-content">
		<div class="max-width">
		<?php 
			foreach($coreValues as $value) { echo "
				<div class='core-value'>
					<div class='icon'><i class='{$value->icon}'></i></div>
					<div class='title'>{$value->title}</div>
					<div class='text'>{$value->text}</div>
				</div>";
			}
		?>
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
					
				</div>
			</div>
		</div>
	</div>

	<div class="team-content section-content">
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
					We're always excited to hear from you! Let us know the best time and method to reach you by filling out the form below.
				</div>
			</div>
		</div>
	</div>

	<div class="contact-content section-content">
		<div class="max-width">

		</div>
	</div>

	<?php
get_footer();