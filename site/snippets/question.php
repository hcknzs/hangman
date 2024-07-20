<?php
    $tags_topic = array_map(function($el) {
        return 'tag-'.Str::slug($el);
    }, $item->topic()->split());

    $tags_audience = array_map(function($el) {
        return 'tag-'.Str::slug($el);
    }, $item->audience()->split());
?>
<article class="question box" id="<?= $item->id() ?>" key="<?= $item->key() ?>" data-topic="<?= join(' ', $tags_topic) ?>"  data-audience="<?= join(' ', $tags_audience) ?>">

    <input type="checkbox" class="checkbox" name="<?= $item->id() ?>">

    <h2 class="is-size-5"><?= $item->title()->html() ?></h2>
    <p><?= $item->question() ?></p>
</article>
