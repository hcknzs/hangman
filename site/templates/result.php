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
                <?php foreach($questions as $item): ?>
                    <?php snippet('question', ['item' => $item]) ?>
                <?php endforeach ?>
            </div>

        </div>

        <div class="column block">
            <div class="box">
                <figure>
                    hangman
                </figure>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime asperiores perspiciatis, quibusdam ipsa nostrum, debitis expedita voluptas cupiditate labore distinctio vel alias numquam blanditiis culpa! Accusantium impedit tenetur quis! Dolorum?</p>
        </div>

    </div>

</div>
<?php snippet('common/footer') ?>
