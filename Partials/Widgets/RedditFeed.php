<?php
//read JsonArray from page and decode it to array
//todo create local fileRead
$redditJsonArray = file_get_contents('http://streamapp.srsbsns.tv/Saves/RedditFeed.json');
$redditPosts = json_decode($redditJsonArray);
?>

<div id="SidebarHeader">subReddit Feed</div>
    <div id="SidebarContent">
        <?php
            $aantalRedditPosts = 0;
            foreach($redditPosts->data->children as $post) {
                if($aantalRedditPosts < 4) {
?>
                    <h2><em><?php echo date('d M', $post->data->created_utc);?></em></h2>
                    <a href="<?php echo $post->data->url; ?>" title="<?php echo $post->data->title; ?>"><?php echo $post->data->title; ?></a>
                    <?php
                        $aantalRedditPosts++;
                    ?>
        <br clear="both" />
        <?php
                }
            }
        if ($aantalRedditPosts == 0) {
            echo "no reddit post available ";
        }
        ?>

    </div>
