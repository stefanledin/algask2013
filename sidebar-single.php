<?php if (get_field('malskyttar')) : ?>
	<div class="infobox">
		<div class="inner">
			<h3>Målskyttar</h3>
			<?php the_field('malskyttar') ?>
		</div>
	</div>
<?php endif; ?>

<?php if (get_field('uppstallning')) : ?>
	<div class="infobox">
		<div class="inner">
			<h3>Laguppställning</h3>
			<?php the_field('uppstallning') ?>
		</div>
	</div>
<?php endif; ?>