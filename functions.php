<?php

function theme_path() {
    $theme_folder = Config::meta('theme');
    return PATH . 'themes' . DS . $theme_folder . DS;
}

function rwar_latest_posts($limit = 200, $reset = 1) {
    // only run on the first call
    if( ! Registry::has('rwar_latest_posts')) {
        // capture original article if one is set
        if($article = Registry::get('article')) {
            Registry::set('original_article', $article);
        }
    }

    if( ! $posts = Registry::get('rwar_latest_posts')) {
        $posts = Post::where('status', '=', 'published')->sort('created', 'desc')->take($limit)->get();

        Registry::set('rwar_latest_posts', $posts = new Items($posts));
    }

    if($result = $posts->valid()) {
        // register single post
        Registry::set('article', $posts->current());

        // move to next
        $posts->next();
    }
    else {
        // back to the start
        $posts->rewind();

        // reset original article
        Registry::set('article', Registry::get('original_article'));

        // remove items
        Registry::set('rwar_latest_posts', false);
    }

    return $result;
}
