<?php 
$page = article_category();
include(theme_path()."Partials/Header.php"); ?>

<!-- MAIN CONTENT WRAPPER -->
<div id="MainWrapper">    

    <!-- MENU STARTS HERE -->
    <div id="NavigationWrapper">
        <?php include(theme_path()."Partials/Menu.php"); ?>
    </div>
    <!-- END MENU -->

    <!-- IMAGE/TITLE BLOCK STARTS HERE -->
    <div id="ArticleImage">
        <img class="articleheader" src="<?php echo article_custom_field("header_image",theme_url('/Resources/IMG/article-fallback.png'));?>">

        <div id="ArticleTitle"><?php echo article_title(); ?></div>

        <div id="ArticleSubTitle">posted by <?php echo article_author();?> on <time datetime="<?php echo date(DATE_W3C, article_time());?>"><?php echo article_date();?></time></div>
    </div>
    <!-- END IMAGE/TITLE BLOCK -->

    <!--- ARTICLE STARTS HERE -->
    <div id="ArticleContent">

        <?php echo article_markdown(); ?>

        <div id="article_end">-</div>

        <div id="disqus_thread"></div>
            <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'srsstrife'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

    </div>
    <!--- END ARTICLE -->

    <!-- FOOTER STARTS HERE -->
        <?php include(theme_path()."Partials/Footer.php");?>
    <!-- END FOOTER -->

</div>
