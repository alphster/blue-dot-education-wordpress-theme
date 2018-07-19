<div class="social-media">
    <?php 
    $option = get_theme_mod('url_twitter', 'https://twitter.com');
    if (!empty($option)) {
        echo '
            <a class="circle twitter" href="'.$option.'">
                <i class="fab fa-twitter"></i>
            </a>';
    }
    $option = get_theme_mod('url_instagram', 'https://instagram.com');
    if (!empty($option)) {
        echo '
        <a class="circle instagram" href="'.$option.'">
            <i class="fab fa-instagram"></i>
        </a>';	
    }
    $option = get_theme_mod('url_facebook', 'https://facebook.com');
    if (!empty($option)) {
        echo '
        <a class="circle facebook" href="'.$option.'">
            <i class="fab fa-facebook-f"></i>
        </a>';
    }
    $option = get_theme_mod('url_linkedin', 'https://linkedin.com');
    if (!empty($option)) {
        echo '
        <a class="circle linkedin" href="'.$option.'">
            <i class="fab fa-linkedin-in"></i>
        </a>';
    }
    $option = get_theme_mod('url_github', 'https://github.com/alphster/blue-dot-education-wordpress-theme');
    if (!empty($option)) {
        echo '
        <a class="circle github" href="'.$option.'">
            <i class="fab fa-github"></i>
        </a>';
    }
    ?>					
</div>