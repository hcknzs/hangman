<?php

return function ($page, $site, $kirby) {
    $questions = $site->find('fragen')->children()->listed()->filter(function($item) {
        return $item;
    });

    return [
        'questions' => $questions,
        'topics' => $site->topic()->split(),
        'audience' => $site->audience()->split(),
    ];
};
