<?php 
    if (has_posts()) {
        while (posts()) {
                include(theme_path()."Partials/CategoryBlockHTML.php");
        }
    }
?>

<div id="RightContainer">
    <?php include(theme_path()."Partials/CategoryPageSidebar.php");?>
</div>


