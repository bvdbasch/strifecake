<?php include(theme_path()."Partials/Header.php"); ?>
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