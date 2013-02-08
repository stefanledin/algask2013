<section class="infobox">
	<div class="inner">
		<header>
			<h3>Sök</h3>
		</header>
		<?php get_search_form(); ?>
	</div>
</section>
<section class="infobox">
	<div class="inner">
		<header>
			<h3>Kategorier</h3>
		</header>
		<ul>
		<?php
			wp_list_categories(array(
				'title_li' => ''
			));
		?>
		</ul>
	</div>
</section>
<section class="infobox">
	<div class="inner">
		<header>
			<h3>Arkiv</h3>
		</header>
		<ul>
		<?php wp_get_archives();?>
		</ul>
	</div>
</section>