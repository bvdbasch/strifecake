<?php
    $backgroundArray = array('gael.jpg', 'lyrie.jpg', 'nestra.jpg', 'strife.jpg', 'tempra.jpg', 'vorbis.jpg' );
    $bgIMG = $backgroundArray[array_rand($backgroundArray)];

    //create Category Array, important update this if you add a new category
    $categories = array(
                    'news' => 'BarBlue',
                    'media' => 'pink', 
                    'learn' => 'BarOrange', 
                    'competitive' => 'BarGreen' 
                );

    //Fetch category
    $category = end((explode('/', current_url()))); 
    //gebruik in een article                        
    //echo article_category();
    if (array_key_exists($category, $categories)) {
        $color = $categories[$category];
    }else{
        $color = "BarBlue";
    }
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo theme_url('/Resources/CSS/main.css'); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'/>

    <!-- jQuery library (served from Google) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="<?php echo theme_url('/Resources/Slider/jquery.bxslider.min.js'); ?>"></script>
    <!-- bxSlider CSS file -->
    <link href="<?php echo theme_url('/Resources/Slider/jquery.bxslider.css'); ?>" rel="stylesheet" />
    <style>
        body{background: url(<?php echo theme_url("/Resources/IMG/Backgrounds/".$bgIMG); ?>) no-repeat;}
    </style>
</head>

<body>
<div id="MainWrapper">

    <!-- MENU STARTS HERE -->
    <div id="Navigation">

        <ul id="menu">
        <li class="nav"><a href="<?php echo base_url(); ?>">&nbsp Home &nbsp</a></li>
<?php 
            while(categories()) { 
?>
       <li class="nav"><a href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>">&nbsp <?php echo category_title(); ?> &nbsp</a></li>
<?php 
            } 
?>
<li>
 <form action="<?php echo search_url();?>" method="post">
    <input type="search" class="search-box" id="term" name="term" value="<?php echo search_term();?>">
 </form>
</li>
    </ul>
    </div>
    <div id="<?php echo $color ?>"></div>
    <!-- END MENU -->

    <!-- SLIDER STARTS HERE -->
    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                      auto: true
});
        });
    </script>

    <div id="Slider">
        <ul class="bxslider">
            <li><a href="http://www.google.nl"><img src="<?php echo theme_url('/Resources/IMG/Slider/strife-school-slider.png') ?>" /></a></li>
            <li><a href="http://www.google.nl"><img src="<?php echo theme_url('/Resources/IMG/Slider/test.jpg') ?>" /></a></li>
            <li><a href="http://www.google.nl"><img src="<?php echo theme_url('/Resources/IMG/Slider/strife-school-slider.png') ?>" /></a></li>
            <li><a href="http://www.google.nl"><img src="<?php echo theme_url('/Resources/IMG/Slider/test.jpg') ?>" /></a></li>
        </ul>
    </div>
    <!-- END SLIDER -->

    <!-- SOCIAL ICONS START HERE -->
    <div id="Social">
        <img src="<?php echo theme_url('/Resources/IMG/Social/rss.png') ?>" /> &nbsp
        <img src="<?php echo theme_url('/Resources/IMG/Social/facebook.png') ?>" /> &nbsp
        <img src="<?php echo theme_url('/Resources/IMG/Social/twitter.png') ?>" /> &nbsp
    </div>
    <!-- END SOLCIAL ICONS -->

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
?>
            <article>
                 <img src="<?php echo article_custom_field("thumb",theme_url('/assets/img/fallback.png'));?>">
                <header>
                    <h1>
                        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                    </h1>
                    <small><?php echo article_date(); ?></small>
                </header>
                <p><?php echo article_description(); ?></p>
            </article>
<?php 
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
?>
            <article>
                 <img src="<?php echo article_custom_field("thumb",theme_url('/assets/img/fallback.png'));?>">
                <header>
                    <h1>
                        <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
                    </h1>
                    <small><?php echo article_date(); ?></small>
                </header>
                <p><?php echo article_description(); ?></p>
            </article>
<?php 
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
</body>
</html>
