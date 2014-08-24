<?php
//create Category Array, important update this if you add a new category
$categories = array(
                'news' => 'Blue',
                'media' => 'pink', 
                'learn' => 'Orange', 
                'competitive' => 'Green' 
            );

//Use in an article                      
//echo article_category();
if (array_key_exists($page, $categories)) {
    $color = $categories[$page];
} else{
    $color = "Blue";
}
