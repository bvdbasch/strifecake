<?php
$maxPosts = 3;
include(theme_path()."Partials/FrontPage/PostsArrayBuilder.php");

?>
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
                if (array_key_exists('news', $posts)) {
                    foreach ($posts['news'] as $article) {
                        if ($amountOfPosts >= $maxPosts){
                            break;
                        }
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
                if (array_key_exists('learn', $posts)) {
                    foreach ($posts['learn'] as $article) {
                        if ($amountOfPosts >= $maxPosts){
                            break;
                        }
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
                if (array_key_exists('competitive', $posts)) {
                    foreach ($posts['competitive'] as $article) {
                        if ($amountOfPosts >= $maxPosts){
                            break;
                        }
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
                $amountOfPosts=0;
                if (array_key_exists('media', $posts)) {
                    foreach ($posts['media'] as $article) {
                        if ($amountOfPosts >= $maxPosts){
                            break;
                        }
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
                $amountOfPosts=0;
                if (array_key_exists('blog', $posts)) {
                    foreach ($posts['blog'] as $article) {
                        if ($amountOfPosts >= $maxPosts){
                            break;
                        }
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
