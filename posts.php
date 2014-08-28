<?php 
//Fetch Check Which Page we at. Important for what Section we should Load.
//Either Load Frontpage, Or a Category Page
//todo: find a better way to get category because this is a dirty dirty dirty hack!!
$urlArray = (explode('/', current_url()));
$keyBeforeCategory = array_search ('category', $urlArray);
$page= $urlArray[$keyBeforeCategory+1];

include(theme_path()."Partials/Header.php"); ?>
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

    <?php 
        //Manage valid categories here, expand as needed
        if ($page == 'learn' || $page == 'news' || $page == 'competitive' || $page == 'media' || $page == 'blog'){
            include(theme_path()."Categorypage.php");
        }else{
            include(theme_path()."Frontpage.php");
        }
    ?>

    <!-- FOOTER STARTS HERE -->
        <?php include(theme_path()."Partials/Footer.php");?>
    <!-- END FOOTER -->

</div>
</body>
</html>
