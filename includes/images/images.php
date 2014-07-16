<?php
/*
Thumbnails plz
 */
add_theme_support('post-thumbnails');

/*
Ta bort width och height från bilder
 */
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

function get_thumbnail_url( $id, $size = null ) {
	$imageObject = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), $size );
	return $imageObject[0];
}