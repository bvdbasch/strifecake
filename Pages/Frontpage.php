<!-- CATEGORIES START HERE -->
    <div id="LeftContainer">
        <div id="CategoryLeft">News
        <div id="BarBlue"></div>
        <div id="CategoryList">


<!-- NEWS CATEGORY-->
<?php 
    if (has_posts()) {
        while (posts()) {
            if ( article_category() == 'news') { 
                include(theme_path()."Partials/FrontpageCategoryBlockHTML.php");
            }
        }
    }
?>

<!-- Pagination -->

<!-- END NEWS CATEGORY-->
        </div>
        </div>

        <div id="CategoryRight">Learn
            <div id="BarOrange"></div>
                <div id="CategoryList">
<?php 
    if (has_posts()) {
        while (posts()) {
            if ( article_category() == 'learn') { 
                include(theme_path()."Partials/FrontpageCategoryBlockHTML.php");
            }
        }
    }
?>
            </div>
        </div>

    </div>

    <div id="RightContainer">This is the sidebar. It would like some widgets</div>

    </div>

    <!-- END CATEGORIES -->

