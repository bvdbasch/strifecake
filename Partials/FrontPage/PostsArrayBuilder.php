<?php
while (rwar_latest_posts(50)) {
    $posts[article_category()][] = [
                                    'title'       => article_title(),
                                    'thumb'       => article_custom_field("thumb",theme_url('Resources/IMG/fallback.png')),
                                    'date'        => article_date(),
                                    'time'        => article_time(),
                                    'author'      => article_author(),
                                    'url'         => article_url(),
                                    'description' => article_description()
                                  ];
}
