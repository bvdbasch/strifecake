<?php 
    if (has_posts()) {
        while (posts()) {
                include(theme_path()."Partials/CategoryPage/CategoryBlockHTML.php");
        }
    }
?>

<div id="RightContainer">
    <?php include(theme_path()."Partials/SideBars/CategoryPageSidebar.php");?>
</div>


