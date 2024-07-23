<?php snippet('common/head') ?>
<?php snippet('common/header') ?>

<div class="container">

	<h1 class="title mb-4"><?= $page->title() ?></h1>
	<p class="is-size-4 mb-4">Was hältst du davon:</p>

	<div class="columns">

		<div class="column is-two-thirds">


			<h2 class="is-size-3 is-sr-only">Fragen</h2>

			<div class="questions">
				<?php $index = 0; ?>
				<?php foreach ($questions as $item) : ?>
					<?php snippet('question-result', ['item' => $item, 'index' => $index]);
					$index++; ?>
				<?php endforeach ?>
			</div>
		</div>

		<div class="column block">
			<article class="message is-info">
				<div class="message-body">Bei jedem "Lieber nicht", mach einen Strich beim Hangman.
					Wenn du zusätzlich persönlich betroffen bist, mach einen Extra-Strich.
				</div>
			</article>
			<div class="box">
				<?php snippet('hangman') ?>
			</div>


		</div>

		<article class="result-message message is-danger">
			<div class="message-body">
				<h3 class="title is-3 has-text-danger">Hängst Du?</h3>
				<p>Jede These ist eine Parole/Forderung aus dem AfD-Parteiprogramm - und auch dein Verhängnis, sollte die AfD an die Regierung gelangen.</p>
			</div>
		</article>
	</div>

	<div class="columns mt-4">
		<div class="column has-text-right">

			<a href="/" class="button is-primary"><span>Nochmal starten</span> <span class="icon"><i class="fas fa-rotate"></i></span> </a>
		</div>
	</div>

</div>


<section class="section">
	<div class="container mt-3 pt-6 explanations">
		<h2 class="title is-5">Erklärungen</h2>
		<button class="button is-text button-show" onClick="console.log(this.nextElementSibling.style.display = 'block'); this.style.display = 'none';">Erklärungen anzeigen</button>
		<div class="columns" style="display: none">
			<div class="column is-two-thirds">
				<?php foreach ($questions as $item) : ?>
					<?php snippet('question-result-info', ['item' => $item, 'index' => $index]);
					$index++; ?>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</section>

<?php snippet('common/footer') ?>