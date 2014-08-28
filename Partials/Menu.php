    <ul id="menu">
    
        <!-- Start Navigation -->
        <li class="Nav<?php echo $color ?>"><a href="<?php echo base_url(); ?>">&nbsp Home &nbsp</a></li>
        
        <?php while(categories()) { ?>
            <li class="Nav<?php echo $color ?>"><a href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>">&nbsp <?php echo category_title(); ?> &nbsp</a></li>
        <?php 
            } 
        ?>
         <!-- End Navigation -->
        
        <!-- Start Searchbar-->
        <li class="Search">
            <form class="CleanForm" action="<?php echo search_url();?>" method="post">
                <input type="search" class="search-box" id="term" name="term" placeholder="Type and hit enter..." value="<?php echo search_term();?>">
            </form>
        </li>
        <!-- End Searchbar -->
    
        <!-- Start Social Icons --->
         <a href="http://strife.srsbsns.tv/feeds/rss"><img src="<?php echo theme_url('Resources/IMG/Social/rss-icon.png') ?>" class="social" alt="RSS" /></a>
        <a href="https://www.twitter.com/srsnation" target="_blank"><img src="<?php echo theme_url('Resources/IMG/Social/tw-icon.png') ?>" class="social" alt="Twitter" />
        <a href="https://www.facebook.com/srsnation" target="_blank"><img src="<?php echo theme_url('Resources/IMG/Social/fb-icon.png') ?>" class="social" alt="Facebook" /></a>            
        <!-- End Social Icons --->

    </ul>
<div id="Bar<?php echo $color ?>"></div> <!-- This line parses the category color bar -->