<?php snippet('common/head') ?>
<?php snippet('common/header') ?>

<?php
	if (empty($_POST)) {
		go($site);
	}
?>

<div class="container">

	<h1 class="title"><?= $page->title() ?></h1>

	<div class="columns">

		<div class="column is-two-thirds">
			<h2 class="is-size-3 is-sr-only">Fragen</h2>
			<div class="questions">
				<?php $index = 0; ?>
				<?php foreach($questions as $item): ?>
					<?php snippet('question-result', ['item' => $item, 'index' => $index]);
					$index++; ?>
				<?php endforeach ?>
			</div>

		</div>

		<div class="column block">
			<div class="box">
				<?php snippet('hangman') ?>
			</div>

			<article class="message is-info">
				<div class="message-body">Bei jedem "Lieber nicht", mach einen Strich beim Hangman.
					Wenn du zusätzlich persönlich betroffen bist, mach einen Extra-Strich.
				</div>
			</article>
		</div>

		<article class="result-message message is-danger">
			<div class="message-body">
				<h3 class="title is-3 has-text-danger">Hängst Du?</h3>
				<p>Jede These ist eine Parole/Forderung aus dem AfD-Parteiprogramm - und dein Verhängnis.</p>
			</div>
		</article>

	</div>

</div>
<?php snippet('common/footer') ?>
