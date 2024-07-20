<?php snippet('common/head') ?>
<?php snippet('common/header') ?>

<?php
if (empty($_POST)) {
	go($site);
}
?>

<div class="container">

	<h1 class="is-size-1"><?= $page->title() ?></h1>

	<div class="columns">

		<div class="column is-two-thirds">
			<h2 class="is-size-3 is-sr-only">Fragen</h2>
			<div class="questions">
				<?php foreach ($questions as $item) : ?>
					<?php snippet('question', ['item' => $item]) ?>
				<?php endforeach ?>
			</div>

		</div>

		<div class="column block">
			<div class="box">
				<?php snippet('hangman') ?>
			</div>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime asperiores perspiciatis, quibusdam ipsa nostrum, debitis expedita voluptas cupiditate labore distinctio vel alias numquam blanditiis culpa! Accusantium impedit tenetur quis! Dolorum?</p>
		</div>

		<article class="result-message message is-danger">
			<div class="message-body">
				<h3 class="title is-3 has-text-danger">Hängst Du?</h3>
				<p>Wenn die AfD an die Regierung kommt könnte das dein Verhängnis sein.</p>
			</div>
		</article>

	</div>

</div>
<?php snippet('common/footer') ?>