<!-- CATEGORIES START HERE -->
<div id="LeftContainer">
    
    <!-- NEWS CATEGORY-->
    <div id="CategoryLeft">
        <div id="CategoryHeader">NEWS</div>     <!-- Header -->    
        <div id="CatBlue"></div>                <!-- Accent -->
    
        <!-- Content -->
        <div id="CategoryList">
        <?php 
            if (has_posts()) {
                while (posts()) {
            if ( article_category() == 'news') { 
                include(theme_path()."Partials/FrontpageCategoryBlockHTML.php");
                    }
                }
            }
        ?>
        </div>
    </div>

</div>