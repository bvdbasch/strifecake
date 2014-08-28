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

    <?php if(has_pagination()){ ?>
     <div id="pagelink">
    <nav class="pagination">
      <?php echo posts_prev(); ?>
    </nav>
    </div>

    <div id="pagelink">
    <nav class="pagination">
      <?php echo posts_next(); ?>
    </nav>
    </div>


    <?php } ?>



</div>
