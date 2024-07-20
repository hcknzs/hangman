<?php
    $tags_topic = array_map(function($el) {
        return 'tag-'.Str::slug($el);
    }, $item->topic()->split());

    $tags_audience = array_map(function($el) {
        return 'tag-'.Str::slug($el);
    }, $item->audience()->split());
?>
<article class="box" id="<?= $item->id() ?>" data-topic="<?= join(' ', $tags_topic) ?>"  data-audience="<?= join(' ', $tags_audience) ?>">
    <h2><?= $item->title()->html() ?></h2>
    <p><?= $item->question() ?></p>
</article>
