<?php
if (empty($post->ancestors[2]) && isset($post->ancestors[1])) {
	wp_list_pages('title_li=&child_of='.$post->ancestors[1]);
} elseif(!empty($post->ancestors[2])) {
	wp_list_pages('title_li=&child_of='.$post->ancestors[2]);
} elseif($post->post_parent !== $post->ancestors[0]) {
	wp_list_pages('title_li=&child_of='.$post->ID);
} else {
	wp_list_pages('title_li=&child_of='.$post->post_parent);
}