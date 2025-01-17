<?php
/**
 * Sydney child functions
 *
 */


/**
 * Enqueues the parent stylesheet. Do not remove this function.
 *
 */
add_action( 'wp_enqueue_scripts', 'sydney_child_enqueue' );
function sydney_child_enqueue() {
    
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* ADD YOUR CUSTOM FUNCTIONS BELOW */

function wp_require_once($path)
{
    if(is_file(get_stylesheet_directory() . $path) )
        require_once (get_stylesheet_directory() . $path);
    else
        require_once (get_template_directory() . $path);
}

wp_require_once('/inc/slider.php');

function sydney_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( 'Publicado no dia %s', 'post date', 'sydney' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( '%s', 'Autor ', 'sydney' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';
	
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( __( 'Deixe um comentário', 'sydney' ), __( '1 Comment', 'sydney' ), __( '% Comments', 'sydney' ) );
		echo '</span>';
	}

	$categories_list = get_the_category_list( __( ', ', 'sydney' ) );
	if ( $categories_list && sydney_categorized_blog() ) {
		printf( '<span class="cat-links">' . __( 'Categoria %1$s', 'sydney' ) . '</span>', $categories_list );
	}
}


add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

/**
 * Adds a form to the end of all single posts
 * 
 * @param string $content
 * 
 * @return string $content
 */
function myprefix_add_form_to_posts( $content ) {

    // Change to ID of the form you want to add
    $form_id = 0;

    // Check if this is a single post. 
    if ( is_singular( 'post' ) ) {        
        $content .= mc4wp_get_form( $form_id );
    }

    // Returns the content.
    return $content;
}

add_filter( 'the_content', 'myprefix_add_form_to_posts' );  


