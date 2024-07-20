<?php
	$tags_topic = array_map(function($el) {
		return 'tag-'.Str::slug($el);
	}, $item->topic()->split());

	$tags_audience = array_map(function($el) {
		return 'tag-'.Str::slug($el);
	}, $item->audience()->split());
?>
<article index="<?= $index ?>" class="question-item box" id="<?= $item->id() ?>" key="<?= $item->key() ?>" data-topic="<?= join(' ', $tags_topic) ?>"  data-audience="<?= join(' ', $tags_audience) ?>">
	<div class="columns">
		<div class="column">
			<p><?= $item->question() ?></p>
		</div>
		<div class="column is-narrow">
			<div class="question-radios">
				<input type="radio" name="radio-<?= $index ?>" id="radio-<?= $index ?>-1" value="yes">
				<label for="radio-<?= $index ?>-1" class="label-yes">
					<span class="icon">
						<i class="fas fa-check"></i>
					</span>
					<span>Na klar</span>
				</label>
				<input type="radio" name="radio-<?= $index ?>" id="radio-<?= $index ?>-0" value="no">
				<label for="radio-<?= $index ?>-0" class="label-no">
					<span class="icon">
						<i class="fas fa-xmark"></i>
					</span>
					<span>Lieber nicht</span>
				</label>
			</div>
		</div>
	</div>
</article>
