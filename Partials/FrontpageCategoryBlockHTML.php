<article>
    <img src="<?php echo article_custom_field("thumb",theme_url('/assets/img/fallback.png'));?>">
    <header>
        <h1>
            <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
        </h1>
        <small><?php echo article_date(); ?></small>
    </header>
    <p><?php echo article_description(); ?></p>
</article>
