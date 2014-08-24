<?php theme_include('partials/header'); ?>

<?php theme_include('partials/menu'); ?>

        <div id="article_wrap">
        <div id="article_crop">
            <h1 class="art_title"><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
            <h1 class="art_sub">posted by <?php echo article_author();?> on <time datetime="<?php echo date(DATE_W3C, article_time());?>"><?php echo article_date();?></time> </h1>
            <h1 class="category"><?php echo article_category();?></h1>
            <div class="art_overlay"></div>
            <img class="art_img" src="<?php echo article_custom_field("background_image",theme_url('/assets/images/fallback.png'));?>">    
        </div>
        
        <div class="article_text">
            <span class="art_bound"><?php echo article_markdown(); ?></span>
        </div>
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
        </div>
<div class="clear"></div>
<?php theme_include('partials/footer'); ?>