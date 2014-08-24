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
    
    </ul>
<div id="Bar<?php echo $color ?>"></div> <!-- This line parses the category color bar -->