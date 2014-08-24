<article>
 <div id="ArticlePreview">
     
     <!-- Preview Image -->
     <img class="frontpage" src="<?php echo article_custom_field("thumb",theme_url('Resources/IMG/fallback.png'));?>">
    
     <header>
        <!-- Article title -->
        <h1><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h1>

        <!-- Article subtitle -->
        <h2><em>Posted by: <?php echo article_author();?> on <time datetime="<?php echo date(DATE_W3C, article_time());?>"><?php echo article_date();?></time></em></h2>

        <!-- End article title -->
    
    </header>
    
    <!-- Article description -->

    <p><?php echo substr(article_description(),0,100); ?><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"> ...</a></p>
     
     
     

    <!-- End article description -->
</div>
</article>
