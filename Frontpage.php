<?php
$maxPosts = 4;
include(theme_path()."Partials/FrontPage/PostsArrayBuilder.php");

?>

<div id="SidebarWrapper"><?php include(theme_path()."Partials/SideBars/FrontpageSidebar.php");?></div>

<!-- LAST UPDATED -->
<div id="CategoryLong">
    <div id="CatHeader">Latest Updates</div>
    <div id="BarBlue"></div>
    <div id="CatContentBlue">

<?php 
            if (has_posts()) {
                $amountOfPosts=0;
                while (posts() && $amountOfPosts < 3) {
                        include(theme_path()."Partials/FrontPage/RecentPostsBlockHTML.php");
                    $amountOfPosts++;
                }
            }
        ?>

</div>
</div>

<!-- NEWS CATEGORY-->
<div id="CategoryShort">
<div id="CatHeader"><a href="<?php echo base_url('category/news') ?>">NEWS</a></div>
<div id="BarGreen"></div>
<div id="CatContentGreen">
    <article>
    <header>
    <table>
    
    <!-- Content -->
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
    
    </table>
    </header>
    </article>
</div>
</div>

<!-- LEARN CATEGORY-->
<div id="CategoryShort">
<div id="CatHeader"><a href="<?php echo base_url('category/learn') ?>">LEARN</a></div>
<div id="BarOrange"></div>
<div id="CatContentOrange">
    <article>
    <header>
    <table>

    <!-- Content -->
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

    </table>
    </header>
    </article>
</div>
</div>

<!-- COMPETITIVE CATEGORY-->
<div id="CategoryShort">
<div id="CatHeader"><a href="<?php echo base_url('category/competitive') ?>">COMPETITIVE</a></div>
<div id="BarPurple"></div>
<div id="CatContentPurple">
    <article>
    <header>
    <table>

    <!-- Content -->
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
    
    </table>
    </header>
    </article>
</div>
</div>

<!-- MEDIA CATEGORY-->
<div id="CategoryShort">
<div id="CatHeader"><a href="<?php echo base_url('category/media') ?>">MEDIA</a></div>
<div id="BarRed"></div>
<div id="CatContentRed">
    <article>
    <header>
    <table>

    <!-- Content -->
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
   
    </table>
    </header>
    </article>
</div>
</div>

<!-- BLOG CATEGORY-->
<div id="CategoryShort">
<div id="CatHeader"><a href="<?php echo base_url('category/blog') ?>">BLOG</a></div>
<div id="BarGray"></div>
<div id="CatContentGray">
    <article>
    <header>
    <table>

    <!-- Content -->
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
        
        </table>
        </header>
        </article>
    </div>
</div>