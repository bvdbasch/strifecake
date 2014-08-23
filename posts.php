<?php
    //the code for a random background is found here
    include(theme_path()."Partials/RandomBackground.php");
    //the code for the Category colors has to be maintained in CategoryColor.php
    include(theme_path()."Partials/CategoryColor.php");
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
<?php
    include(theme_path()."Partials/Menu.php");
?>
<!-- END MENU -->

    <!-- SLIDER STARTS HERE -->
    <?php include(theme_path()."Partials/Slider.php"); ?>
    <!-- END SLIDER -->

    <!-- SOCIAL ICONS START HERE -->
    <?php include(theme_path()."Partials/SocialIcons.php"); ?>
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
</body>
</html>
