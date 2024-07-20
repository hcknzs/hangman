<?php

return function ($page, $site, $kirby) {
    // get post object from form
    $post = $_POST;
    $post_ids = array_keys($post);

    // get filtered questions
    $questions = [];
    if (!empty($post_ids)) {
        $questions = $site->find('fragen')->children()->listed()->filter(function($item) use ($post_ids) {
            foreach($item as $key => $value) {
                return in_array($item->id(), $post_ids);
            }
            return $item;
        });
    }

    return [
        'questions' => $questions
    ];
};
