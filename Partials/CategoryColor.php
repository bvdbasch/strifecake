<?php
//create Category Array, important update this if you add a new category
$categories = array(
                'news' => 'BarBlue',
                'media' => 'pink', 
                'learn' => 'BarOrange', 
                'competitive' => 'BarGreen' 
            );

//gebruik in een article                        
//echo article_category();
if (array_key_exists($page, $categories)) {
    $color = $categories[$page];
} else{
    $color = "BarBlue";
}
