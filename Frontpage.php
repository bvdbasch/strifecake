<!-- CATEGORIES START HERE -->
<div id="LeftContainer">
    
    <!-- NEWS CATEGORY-->
    <div id="CategoryLeft">
        <div id="CategoryHeader"><a href="<?php echo base_url('category/news') ?>">NEWS</a></div>   <!-- Header -->    
        <div id="CatGreen"></div>                                                                   <!-- Accent -->

        <!-- Content -->
        <div id="CategoryList">
        <?php 
            if (has_posts()) {
                $amountOfPosts=0;
                while (posts() && $amountOfPosts < 3) {
                    if ( article_category() == 'news') { 
                        include(theme_path()."Partials/FrontPage/FrontpageCategoryBlockHTML.php");
                        $amountOfPosts++;
                    }
                }
            }
        ?>
        </div>
    </div>

    <!-- LEARN CATEGORY-->
    <div id="CategoryRight">
        <div id="CategoryHeader"><a href="<?php echo base_url('category/learn') ?>">LEARN</a></div>    <!-- Header -->    
        <div id="CatOrange"></div>                                                                     <!-- Accent -->

        <!-- Content -->
        <div id="CategoryList">
        <?php 
            if (has_posts()) {
                $amountOfPosts=0;
                while (posts() && $amountOfPosts < 3) {
                    if ( article_category() == 'learn') { 
                        include(theme_path()."Partials/FrontPage/FrontpageCategoryBlockHTML.php");
                        $amountOfPosts++;
                    }
                }
            }
        ?>
        </div>
    </div>
<br clear="both" />

    <!-- COMPETITIVE CATEGORY-->
    <div id="CategoryLeft">
        <div id="CategoryHeader"><a href="<?php echo base_url('category/competitive') ?>">COMPETITIVE</a></div>  <!-- Header -->    
        <div id="CatPurple"></div>                                                                               <!-- Accent -->

        <!-- Content -->
        <div id="CategoryList">
        <?php 
            if (has_posts()) {
                $amountOfPosts=0;
                while (posts() && $amountOfPosts < 3) {
                    if ( article_category() == 'competitive') { 
                        include(theme_path()."Partials/FrontPage/FrontpageCategoryBlockHTML.php");
                        $amountOfPosts++;
                    }
                }
            }
        ?>
        </div>
    </div>

    <!-- MEDIA CATEGORY-->
    <div id="CategoryRight">
        <div id="CategoryHeader"><a href="<?php echo base_url('category/media') ?>">MEDIA</a></div>   <!-- Header -->    
        <div id="CatRed"></div>                                                                      <!-- Accent -->

        <!-- Content -->
        <div id="CategoryList">
        <?php 
            if (has_posts()) {
                $amountOfPosts = 0;
                while (posts() && $amountOfPosts < 3) {
                    if ( article_category() == 'media') { 
                        include(theme_path()."Partials/FrontPage/FrontpageCategoryBlockHTML.php");
                        $amountOfPosts++;
                    }
                }
            }
        ?>
        </div>
    </div>

<br clear="both" />
    <!-- BLOG CATEGORY-->
    <div id="CategoryLeft">
        <div id="CategoryHeader"><a href="<?php echo base_url('category/blog') ?>">BLOG</a></div>   <!-- Header -->    
        <div id="CatGray"></div>                                                                    <!-- Accent -->

        <!-- Content -->
        <div id="CategoryList">
        <?php 
            if (has_posts()) {
                $amountOfPosts = 0;
                while (posts() && $amountOfPosts < 3) {
                    if ( article_category() == 'blog') { 
                        include(theme_path()."Partials/FrontPage/FrontpageCategoryBlockHTML.php");
                        $amountOfPosts++;
                    }
                }
            }
        ?>
        </div>
    </div>
</div>

<div id="RightContainer">
    <?php include(theme_path()."Partials/SideBars/FrontpageSidebar.php");?>
</div>
