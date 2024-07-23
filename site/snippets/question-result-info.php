<article index="<?= $index ?>" class="box" id="<?= $item->id() ?>">
	<div class="content">
		<h3 class="is-size-5"><?= $item->question() ?></h3>
		<?= kirbytext($item->annotation()); ?>

		<h4 class="is-size-6">Quelle</h4>
		<?= kirbytext($item->sourcetext()) ?>

		<?= kirbytext($item->source()) ?>
	</div>
</article>