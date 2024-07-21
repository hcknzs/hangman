<article index="<?= $index ?>" class="box" id="<?= $item->id() ?>">
	<div class="content is-size-7">
		<h3 class="is-size-6"><?= $item->question() ?></h3>
		<p><?= str_replace("\n\n", "</p>\n<p>", $item->annotation()) ?></p>
	</div>
</article>
