<?php if (get_field('malskyttar')) : ?>
	<div class="infobox">
		<header>
			<h3>Målskyttar</h3>
		</header>
		<div class="inner">
			<?php the_field('malskyttar') ?>
		</div>
	</div>
<?php endif; ?>

<?php if (get_field('uppstallning')) : ?>
	<div class="infobox">
		<header>
			<h3>Laguppställning</h3>
		</header>
		<div class="inner">
			<?php the_field('uppstallning') ?>
		</div>
	</div>
<?php endif; ?>