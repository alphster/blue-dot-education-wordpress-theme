<?php
/**
 * The template for displaying front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bde
 */

function divider($className = "") {
	echo "<div class=\"ray-dot $className\"><div></div><div></div></div>";
}

class CoreValue {
    public $foo;
    public $bar;
}

$lorips = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

$obj1 = new CoreValue();
$obj1->icon = get_theme_mod('core_value_icon1', 'fas fa-flask');
$obj1->title = get_theme_mod('core_value_title1', 'Science');
$obj1->color = get_theme_mod('core_value_color1', '#29B6F6');
$obj1->text = get_theme_mod('core_value_text1', $lorips);

$obj2 = new CoreValue();
$obj2->icon = get_theme_mod('core_value_icon2', 'fas fa-rocket');
$obj2->title = get_theme_mod('core_value_title2', 'Exploration');
$obj2->color = get_theme_mod('core_value_color2', '#EF5350');
$obj2->text = get_theme_mod('core_value_text2', $lorips);

$obj3 = new CoreValue();
$obj3->icon = get_theme_mod('core_value_icon3', 'fas fa-leaf');
$obj3->title = get_theme_mod('core_value_title3', 'Stewardship');
$obj3->color = get_theme_mod('core_value_color3', '#66BB6A');
$obj3->text = get_theme_mod('core_value_text3', $lorips);

$obj4 = new CoreValue();
$obj4->icon = get_theme_mod('core_value_icon4', 'fas fa-star');
$obj4->title = get_theme_mod('core_value_title4', 'Something');
$obj4->color = get_theme_mod('core_value_color4', '#FFEB3B');
$obj4->text = get_theme_mod('core_value_text4', $lorips);

$coreValues = array($obj1, $obj2, $obj3, $obj4);

get_header();
?>
	<div class="hero-content">
		<div class="cover"></div>
		<div class="max-width">
			<div class="content">
				<div class="row1">
					<div class="logo-and-text">
						<div class="site-branding">		
							<div class="logo" alt="logo"></div>
							<div class="site-title">
								<?php bloginfo( 'name' ); ?>
								<div class="sub-text">Enhancing Education through Experiences.</div>								
							</div>			
							
						</div><!-- .site-branding -->						
						<?php divider("colored"); ?>
						<?php include('_social_media.php') ?>
						
					</div>
				</div>
				<?php /*<div class="row2">					
					<div class="main-navigation">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						 ?>
					</div>
				</div>*/ ?>
				<?php /*<div class="text1">
					<?php
					$option1 = get_theme_mod('text_call_to_action', 'WE ARE ENHANCING EDUCATION THROUGH EXPERIENCES');					
					echo $option1;
					?>					
				</div>
				<?php divider("colored"); ?>
				<div class="text2">
					<?php
					$option2 = get_theme_mod('text_call_to_action2', $lorips);					
					echo $option2;					
					?>		
				</div>
				<div class="down-button">
					<i class="fas fa-angle-double-down"></i>
				</div>
				*/?>
			</div>
		</div>
	</div>
	
	<div id="news">
		<?php /*<div class="news-header section-header bg-none">
			<div class="max-width">
				<div>
					<div class="title">
						Latest News
					</div>
					<?php divider("colored"); ?>
					<div>
						Catch up with our latest posts, or check out our instagram gallery.
					</div>
				</div>				
			</div>
		</div>
		*/?>
		<div class="news-content section-content bg-none">
			<div class="max-width">
				<div class="recent-posts">
					<?php
					$args = array( 
						'numberposts' => '6',
						'post_status' => 'publish'
					);
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){					
						$recent_post_id = $recent["ID"];
						$recent_post_date = $recent["post_date"];					
						$recent_post_title = $recent["post_title"];	
						$recent_post_excerpt = wp_trim_words( $recent["post_content"], $num_words = 33);
						$formatted_date = date('l, F j, Y', strtotime($recent_post_date));	
						$recent_author_id = $recent["post_author"];
						$recent_author_image = get_avatar_url( $recent_author_id );
						$recent_author = get_user_by( 'ID', $recent_author_id );

						if ( has_post_thumbnail( $recent["ID"]) ) {
							$featured_image_url = get_the_post_thumbnail_url($recent_post_id, 'medium_large');
						}
						
						echo '
							<div class="post">																
								<div class="post-inner">			
									<a href="'.get_permalink($recent_post_id).'">
										<div class="image">																
											<img src="'.get_template_directory_uri().'/assets/4by3pixels.png" />
											<div class="bg-image" style="background-image: url(\''.$featured_image_url.'\')"></div>																			
										</div>																													
										<div class="content">
											<div class="date">'.$formatted_date.'</div>		
											<div class="title">'.$recent_post_title.'</div>																		
											<div class="excerpt">'.$recent_post_excerpt.'</div>
											<div class="author">												
												<div class="author-image" style="background-image: url(\''.$recent_author_image.'\')"></div>
												<div class="author-name">'.$recent_author->display_name.'</div>												
											</div>											
										</div>
									</a>
								</div>								
							</div>';
					}
					wp_reset_query();
				?>
				</div>
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
	<div id="about">
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
				<div class="team-holder">
					<div class="person-outer">

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="programs">
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
	</div>

	<div id="contact">
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
					<div class="contact-form">
						<?php wpforms_display( 1255); ?>
					</div>
				</div>
			</div>
		</div>

		<?php /*<div class="contact-content section-content">
			<div class="max-width">
				
			</div>
		</div>*/ ?>
	</div>

	<?php
get_footer();