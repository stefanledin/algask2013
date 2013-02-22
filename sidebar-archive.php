<section class="infobox">
	<header>
		<h3>Sök i arkivet</h3>
	</header>
	<div class="inner">
		<?php get_search_form(); ?>
	</div>
</section>

<section class="infobox">
	<header>
		<h3>Kategorier</h3>
	</header>
	<div class="inner">
		<ul class="category-list">
		<?php
			wp_list_categories(array(
				'title_li' => ''
			));
		?>
		</ul>
	</div>
</section>

<section class="infobox">
	<header>
		<h3>Arkiv</h3>
	</header>
	<div class="inner">
		<ul>
		<?php wp_get_archives();?>
		</ul>
	</div>
</section>