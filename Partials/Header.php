<?php
    //the code for a random background is found here
    include(theme_path()."Partials/Widgets/RandomBackground.php");
    //the code for the Category colors has to be maintained in CategoryColor.php
    include(theme_path()."Partials/Widgets/CategoryColor.php");
?>

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
