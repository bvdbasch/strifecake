<article>
 <div id="ArticlePreview">
     <!-- Preview Image -->
     <img class="frontpage" src="<?php echo $article['thumb'];?>">

     <header>
        <!-- Article title -->
        <h1><a href="<?php echo $article['url']; ?>" title="<?php echo $article['title']; ?>"><?php echo $article['title']; ?></a></h1>

        <!-- Article subtitle -->
        <h2><em>Posted by: <?php echo $article['author'];?> on <time datetime="<?php echo date(DATE_W3C, $article['time']);?>"><?php echo $article['date'];?></time></em></h2>
     </header>

     <!-- Article description -->
     <p>
        <?php
            $maxDiscCharacters = 100;
            $countedDiscription = strlen($article['description']);

            if($countedDiscription > $maxDiscCharacters+1){
                echo substr($article['description'],0,$maxDiscCharacters)." ...";
            }else{
                echo $article['description'];
            }
        ?>
    </p>
</div>
</article>
