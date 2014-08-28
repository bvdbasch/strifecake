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
<!-- MAIN CONTENT WRAPPER -->
<div id="MainWrapper">    
    
<!-- MENU STARTS HERE -->
<div id="NavigationWrapper">
    <?php include(theme_path()."Partials/Menu.php"); ?>
    
    <!-- SLIDER STARTS HERE -->
    <?php
        if ($page == NULL) {
            include(theme_path()."Partials/Widgets/Slider.php"); 
        }
    ?>          
    <!-- END SLIDER -->
</div>
<!-- END MENU -->
    


    <!-- SOCIAL ICONS START HERE -->
    <?php include(theme_path()."Partials/SocialIcons.php"); ?>
    <!-- END SOLCIAL ICONS -->

    <?php 
        //Manage valid categories here, expand as needed
        if ($page == 'learn' || $page == 'news' || $page == 'competitive' || $page == 'media' || $page == 'blog'){
            include(theme_path()."Categorypage.php");
        }else{
            include(theme_path()."Frontpage.php");
        }
    ?>
    
    <!-- FOOTER STARTS HERE -->
    <div id="FooterWrapper">
        <div id="FooterInner">
            <img src="<?php echo theme_url('/Resources/IMG/sbtv.png'); ?>" class="footer" />
            <div id="FooterDivider"></div>
            <ul>
                <li class="Footer">About</li>
                <li class="Footer">Team Kaizen</li>
                <li class="Footer">Streamers</li>
                <li class="Footer">Twitter</li>
                <li class="Footer">Facebook</li>
            </ul>
            
            <center>
                <em><?php echo site_name() ?></em>
            </center>
        </div>
    </div>

</div>
</body>
</html>