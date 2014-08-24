<!-- CATEGORIES START HERE -->
<div id="LeftContainer">
    
    <!-- NEWS CATEGORY-->
    <div id="CategoryLeft">
        <div id="CategoryHeader">NEWS</div> <!-- Header -->    
        <div id="CatGreen"></div>           <!-- Accent -->
    
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
    
    <!-- LEARN CATEGORY-->
    <div id="CategoryRight">
        <div id="CategoryHeader">LEARN</div>    <!-- Header -->    
        <div id="CatOrange"></div>              <!-- Accent -->
    
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
    
    <!-- COMPETITIVE CATEGORY-->
    <div id="CategoryLeft">
        <div id="CategoryHeader">COMPETITIVE</div>  <!-- Header -->    
        <div id="CatPurple"></div>                  <!-- Accent -->
    
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

    <!-- MEDIA CATEGORY-->
    <div id="CategoryRight">
        <div id="CategoryHeader">MEDIA</div>   <!-- Header -->    
        <div id="CatRed"></div>                <!-- Accent -->
    
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
    
    <!-- BLOG CATEGORY-->
    <div id="CategoryLeft">
        <div id="CategoryHeader">BLOG</div>   <!-- Header -->    
        <div id="CatGray"></div>              <!-- Accent -->
    
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

<div id="RightContainer">TEST</div>