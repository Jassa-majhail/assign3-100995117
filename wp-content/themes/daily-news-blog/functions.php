<?php

add_action("init", function () {
register_block_pattern_category(
	'daily-news-blog',
	array( 'label' => __( 'Daily News Blog', 'daily-news-blog' ) )
);
});

add_action('init', function() {
	remove_theme_support('core-block-patterns');
});

add_theme_support( 'wp-block-styles' );

function daily_news_blog_pattern_styles()
{
	wp_enqueue_style('daily-news-blog-patterns', get_stylesheet_directory_uri() . '/assets/css/patterns.css', array(), filemtime(get_template_directory() . '/assets/css/patterns.css'));
	if (is_admin()) {
		global $pagenow;
		if ('site-editor.php' === $pagenow) {
			// Do not enqueue editor style in site editor
			return;
		}
		wp_enqueue_style('daily-news-blog-editor', get_stylesheet_directory_uri() . '/assets/css/editor.css', array(), filemtime(get_template_directory() . '/assets/css/editor.css'));
	}
}
add_action('enqueue_block_assets', 'daily_news_blog_pattern_styles');


// Load extra styles only for logged-in users.
function dnb_child_enqueue_logged_in_styles() {
    if ( is_user_logged_in() ) {
        wp_enqueue_style(
            'dnb-child-logged-in',
            get_stylesheet_directory_uri() . '/assets/css/logged-in.css',
            array(),
            wp_get_theme()->get( 'Version' )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'dnb_child_enqueue_logged_in_styles' );