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

class CoreValue {}
class TeamMember {}

$lorips = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$lorips2 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";

$aboutUsTitle = get_theme_mod('text_header_aboutus', 'About Us');
$aboutUsText = get_theme_mod('textarea_header_aboutus', $lorips2);

$programsTitle = get_theme_mod('text_header_programs', 'Our Programs & Projects');
$programsText = get_theme_mod('textarea_header_programs', $lorips2);

$contactUsTitle = get_theme_mod('text_header_contactus', 'Let\'s get in Touch!');
$contactUsText = get_theme_mod('textarea_header_contactus', 'We\'re always excited to hear from you! Let us know the best time and method to reach you by filling out the form below.');

$heroSubTitle = get_theme_mod('hero_sub_title', 'Enhancing Education through Experiences.');

$cv1 = new CoreValue();
$cv1->icon = get_theme_mod('core_value_icon1', 'fas fa-flask');
$cv1->title = get_theme_mod('core_value_title1', 'Science');
$cv1->color = get_theme_mod('core_value_color1', '#29B6F6');
$cv1->text = get_theme_mod('core_value_text1', $lorips);

$cv2 = new CoreValue();
$cv2->icon = get_theme_mod('core_value_icon2', 'fas fa-rocket');
$cv2->title = get_theme_mod('core_value_title2', 'Exploration');
$cv2->color = get_theme_mod('core_value_color2', '#EF5350');
$cv2->text = get_theme_mod('core_value_text2', $lorips);

$cv3 = new CoreValue();
$cv3->icon = get_theme_mod('core_value_icon3', 'fas fa-leaf');
$cv3->title = get_theme_mod('core_value_title3', 'Stewardship');
$cv3->color = get_theme_mod('core_value_color3', '#66BB6A');
$cv3->text = get_theme_mod('core_value_text3', $lorips);

$cv4 = new CoreValue();
$cv4->icon = get_theme_mod('core_value_icon4', 'fas fa-star');
$cv4->title = get_theme_mod('core_value_title4', 'Something');
$cv4->color = get_theme_mod('core_value_color4', '#FFEB3B');
$cv4->text = get_theme_mod('core_value_text4', $lorips);

$coreValues = array($cv1, $cv2, $cv3, $cv4);

$team1 = new TeamMember();
$team1->name = get_theme_mod('core_value_icon1', 'fas fa-flask');
$team1->title = get_theme_mod('core_value_title1', 'Science');
$team1->color = get_theme_mod('core_value_color1', '#29B6F6');
$team1->text = get_theme_mod('core_value_text1', $lorips);

$team2 = new TeamMember();
$team2->name = get_theme_mod('core_value_icon2', 'fas fa-rocket');
$team2->title = get_theme_mod('core_value_title2', 'Exploration');
$team2->color = get_theme_mod('core_value_color2', '#EF5350');
$team2->text = get_theme_mod('core_value_text2', $lorips);

$team3 = new TeamMember();
$team3->icon = get_theme_mod('core_value_icon3', 'fas fa-leaf');
$team3->title = get_theme_mod('core_value_title3', 'Stewardship');
$team3->color = get_theme_mod('core_value_color3', '#66BB6A');
$team3->text = get_theme_mod('core_value_text3', $lorips);

$team4 = new TeamMember();
$team4->icon = get_theme_mod('core_value_icon4', 'fas fa-star');
$team4->title = get_theme_mod('core_value_title4', 'Something');
$team4->color = get_theme_mod('core_value_color4', '#FFEB3B');
$team4->text = get_theme_mod('core_value_text4', $lorips);

$teamMembers = array($team1, $team2, $team3, $team4);

$contactFormId = get_theme_mod('contact_wpforms_id', '');

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
								<div class="sub-text"><?php echo $heroSubTitle ?></div>	
							</div>			
							
						</div><!-- .site-branding -->						
						<?php divider(); ?>
						<?php include('_social_media.php') ?>
						
					</div>
				</div>		
			</div>
		</div>
	</div>
	
	<div id="news" class="news-section">
		<div class="max-width-lg">
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
					$recent_post_excerpt = wp_trim_words( $recent["post_content"], $num_words = 33);
					$formatted_date = date('l, F j, Y', strtotime($recent_post_date));	
					$recent_author_id = $recent["post_author"];
					$recent_author_image = get_wp_user_avatar_src( $recent_author_id );
					$recent_author = get_user_by( 'ID', $recent_author_id );

					if ( has_post_thumbnail( $recent["ID"]) ) {
						$featured_image_url = get_the_post_thumbnail_url($recent_post_id, 'medium_large');
					}
					
					echo '
						<div class="post">							
							<div class="post-outer">									
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
							</div>							
						</div>';
				}
				wp_reset_query();
			?>
			</div>
		</div>
	</div>

	<div id="about">
		<div class="about-section">
			<div class="max-width">
				<div>
					<div class="section-header">
						<div class="title">
							<?php echo $aboutUsTitle ?>
						</div>
						<?php divider(); ?>
						<div class="text">
							<?php echo $aboutUsText ?>
						</div>
					</div>
					<div class="content">
						<?php 
						foreach($coreValues as $value) { echo "
							<div class='core-value-flex'>
								<div class='core-value' style='border-color: {$value->color}'>
									<div class='icon' style='color: {$value->color}'><i class='{$value->icon}'></i></div>
									<div class='title'>{$value->title}</div>
									<div class='text'>{$value->text}</div>
								</div>
							</div>";
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="team-section">
			<div class="max-width">
				<div>
					<div class="title">
						MEET THE TEAM
					</div>
					<div class="team-row">
						<?php /*
							foreach($team as $value) { echo "
								<div class='team-member-flex'>
									<div class='team-member' style='border-color: {$value->color}'>
										<div class='icon' style='color: {$value->color}'><i class='{$value->icon}'></i></div>
										<div class='title'>{$value->title}</div>
										<div class='text'>{$value->text}</div>
									</div>
								</div>";
							}
						*/?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="programs" class="programs-section">
		<div class="max-width">
			<div style="width: 100%">
				<div class="section-header">
					<div class="title">
						<?php echo $programsTitle ?>
					</div>
					<?php divider(); ?>
					<div class="text">
						<?php echo $programsText ?>
					</div>
				</div>
				<div class="content">
					COMING SOON!
				</div>
			</div>
		</div>
	</div>

	<div id="contact" class="contact-section">
		<div class="max-width">
			<div style="width: 100%">
				<div class="section-header">
					<div class="title">
						<?php echo $contactUsTitle ?>
					</div>
					<?php divider(); ?>
					<div class="text">
						<?php echo $contactUsText ?>
					</div>
				</div>
				<div class="contact-form">
					<?php if ($contactFormId != '') wpforms_display($contactFormId); ?>
				</div>
			</div>
		</div>
	</div>

	<?php
get_footer();