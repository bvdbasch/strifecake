<?php 
    if (has_posts()) {
        while (posts()) {
                include(theme_path()."Partials/CategoryBlockHTML.php");
        }
    }
?>


