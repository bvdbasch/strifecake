<?php
    //Fetch Check Which Page we at. Important for what Section we should Load.
    //Either Load Frontpage, Or a Category Page
    $page = end((explode('/', current_url()))); 

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
    <?php include(theme_path()."Partials/Menu.php"); ?>
    <!-- END MENU -->

    <!-- SLIDER STARTS HERE -->
    <?php include(theme_path()."Partials/Slider.php"); ?>
    <!-- END SLIDER -->

    <!-- SOCIAL ICONS START HERE -->
    <?php include(theme_path()."Partials/SocialIcons.php"); ?>
    <!-- END SOLCIAL ICONS -->

    <?php 
        //Manage valid categories here, expand as needed
        if ($page == 'learn' || $page == 'news' ){
            include(theme_path()."Pages/Categorypage.php");
        }else{
            include(theme_path()."Pages/Frontpage.php");
        }
    ?>

</body>
</html>
