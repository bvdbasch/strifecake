<?php include(theme_path()."Partials/Header.php"); ?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo theme_url('/Resources/CSS/main.css'); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />

    <!-- jQuery library (served from Google) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
    <!-- bxSlider Javascript file -->
    <script src="<?php echo theme_url('/Resources/Slider/jquery.bxslider.min.js'); ?>"></script>
    
    <!-- bxSlider CSS file -->
    <link href="<?php echo theme_url('/Resources/Slider/jquery.bxslider.css'); ?>" rel="stylesheet" />
    
    <style>
        body{background-image: url(<?php echo theme_url("/Resources/IMG/Backgrounds/".$bgIMG); ?>)}
    </style>
</head>

<body>
<!-- MENU STARTS HERE -->
<div id="NavigationWrapper">
    <?php include(theme_path()."Partials/Menu.php"); ?>
    
    <!-- SLIDER STARTS HERE -->
    <?php
        if ($page == NULL) {
            include(theme_path()."Partials/Slider.php"); 
        }
    ?>          
    <!-- END SLIDER -->
</div>
<!-- END MENU -->
    
<!-- MAIN CONTENT WRAPPER -->
<div id="MainWrapper">

    <!-- SOCIAL ICONS START HERE -->
    <?php include(theme_path()."Partials/SocialIcons.php"); ?>
    <!-- END SOLCIAL ICONS -->

    <?php 
        //Manage valid categories here, expand as needed
        if ($page == 'learn' || $page == 'news' || $page == 'competitive' || $page == 'media' || $page == 'blog'){
            include(theme_path()."Pages/Categorypage.php");
        }else{
            include(theme_path()."Pages/Frontpage.php");
        }
    ?>
</div>
</body>
</html>
