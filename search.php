<h2>SEARCH FOR: <?php echo search_term(); ?></h2>
<?php 
if(has_search_results()) {
    while(search_results()) {
?>
<div class="article_wrapper">
<?php echo article_category();?>
<img src="<?php echo article_custom_field("background_image",theme_url('/assets/images/fallback.png'));?>" />
<h1>
    <a href="<?php echo article_url();?>"><?php echo article_title();?></a>
</h1>
<h2>
    posted by <?php echo article_author_bio();?> on <?php echo article_date();?>
</h2>
<p><?php echo article_description();?></p>
</div>

<?php } ?>
 
  <?php if(has_pagination()){ ?>
  <nav class="pagination">
      <?php echo posts_next(); ?>
      <?php echo posts_prev(); ?>
  </nav>
<?php
 }
}else{
?>
<div class="post-content">
  <div class="plain-white">
    <h2>Sorry! I don't think there is anything here. Try searching again!</h2>
  </div>
 </div>
<?php 
}
?>
