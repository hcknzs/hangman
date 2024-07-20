<?php snippet('common/head') ?>
<?php snippet('common/header') ?>

<div class="container">

    <h1><?= $page->title() ?></h1>

    <div class="columns">

        <div class="column is-two-thirds">
            <h2 class="is-size-3">Fragen</h2>
            <p>Bitte noch <span>10</span> Fragen auswählen.</p>
            <div class="questions">
                <?php foreach($page->children()->listed() as $item): ?>
                    <?php snippet('question', ['item' => $item]) ?>
                <?php endforeach ?>
            </div>

            <button>Next</button>
        </div>

        <div class="column">
            <h2 class="is-size-3">Filter</h2>
            <div class="box">
                <div class="field">
                    <label class="label">Themen</label>
                    <div class="select" style="width: 100%">
                        <select class="filter" name="topics" style="width: 100%">
                            <option value="">Alle</option>
                            <?php foreach ($site->topic()->split() as $tag) : ?>
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
                            <?php foreach ($site->audience()->split() as $tag) : ?>
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
