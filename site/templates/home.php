
<?php
// skip home page for now
go('/questions', 301);
?>


<?php snippet('common/head') ?>
<?php snippet('common/header') ?>

<div class="container">

	<h1 class="title">Dein Verhängnis</h1>

	<div class="columns">

		<div class="column is-two-thirds">
			<h2 class="title is-5">Fragen</h2>

			<!-- <p>Bitte noch <span class="question-counter">0</span> Fragen auswählen.</p> -->

			<form class="questions" method="post" action="/questions">
				<?php $index = 0; ?>
				<?php foreach($questions as $item): ?>
					<?php snippet('question', ['item' => $item, 'index' => $index]);
					$index++; ?>
				<?php endforeach ?>
				<input type="submit" value="Fragebogen zusammenstellen" class="button is-primary">
			</form>

		</div>

		<div class="column">
				<h2 class="title is-5">Filter</h2>
				<div class="box">
					<div class="field">
						<label class="label">Themen</label>
						<div class="select" style="width: 100%">
							<select class="filter" name="topic" style="width: 100%">
								<option value="">Alle</option>
								<?php foreach ($topics as $tag) : ?>
									<option value="<?= Str::slug($tag) ?>"><?= $tag ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
					<div class="field">
						<label class="label">Zielgruppen</label>
						<div class="select" style="width: 100%">
							<select class="filter" name="audience" style="width: 100%">
								<option value="">Alle</option>
								<?php foreach ($audience as $tag) : ?>
									<option value="<?= Str::slug($tag) ?>"><?= $tag ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
				</div>
		</div>

	</div>

</div>
<?php snippet('common/footer') ?>
