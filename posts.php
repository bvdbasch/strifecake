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
            
            <br clear="both"/>
            
            <center>
                <em><?php echo site_name() ?></em>
            </center>
        </div>
    </div>

</div>
</body>
</html>