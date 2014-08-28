<div id="CategoryPage">
<table>
<?php 
    if (has_posts()) {
        while (posts()) {
                include(theme_path()."Partials/CategoryPage/CategoryBlockHTML.php");
        }
    }
?>
</table>
    <div id="article_end">-</div>
    
    PAGINATION HERE PLZ!
    
</div>