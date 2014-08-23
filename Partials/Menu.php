   <div id="Navigation">
        <ul id="menu">
        <li class="nav"><a href="<?php echo base_url(); ?>">&nbsp Home &nbsp</a></li>
<?php 
            while(categories()) { 
?>
       <li class="nav"><a href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>">&nbsp <?php echo category_title(); ?> &nbsp</a></li>
<?php 
            } 
?>
<li>
 <form action="<?php echo search_url();?>" method="post">
    <input type="search" class="search-box" id="term" name="term" placeholder="Search" value="<?php echo search_term();?>">
 </form>
</li>
    </ul>
    </div>
    <div id="<?php echo $color ?>"></div>

