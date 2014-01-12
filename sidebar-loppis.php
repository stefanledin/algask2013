<nav class="submenu-container span2">
	<ul class="submenu">
	<?php
		$loppiskategorier = get_terms('loppiskategori');
		$current = get_the_terms($post->ID, 'loppiskategori');
		if ($current) $current = array_shift($current);
		foreach ($loppiskategorier as $cat) {
			$class = $cat->slug;
			if ($current) {
				if ($current->term_id == $cat->term_id) {
					$class .= ' current_page_item';
				}
			}
			echo '<li class="'.$class.'"><a href="'.get_term_link($cat).'">'.$cat->name.' ('.$cat->count.')</a></li>';
		}
	?>
	</ul>
</nav>