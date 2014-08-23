<?php
//create Category Array, important update this if you add a new category
$categories = array(
                'news' => 'BarBlue',
                'media' => 'pink', 
                'learn' => 'BarOrange', 
                'competitive' => 'BarGreen' 
            );

//Fetch category
$category = end((explode('/', current_url()))); 
//gebruik in een article                        
//echo article_category();
if (array_key_exists($category, $categories)) {
    $color = $categories[$category];
} else{
    $color = "BarBlue";
}
