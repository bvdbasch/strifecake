<?php
//read JsonArray from page and decode it to array
//todo create local fileRead
$redditJsonArray = file_get_contents('http://streamapp.srsbsns.tv/Saves/RedditFeed.json');
$redditPosts = json_decode($redditJsonArray);
?>

<div id="SidebarHeader">Strife subReddit</div>
<div id="SidebarContent">
    <table>
        <?php
            $aantalRedditPosts = 0;
            foreach($redditPosts->data->children as $post) {
                if($aantalRedditPosts < 6) {
?>
        <tr>
                    <td>
                        <a href="<?php echo $post->data->url; ?>" title="<?php echo $post->data->title; ?>"><?php echo $post->data->title; ?></a><br />
                        <h2><em><?php echo date('d M - H:i', $post->data->created_utc);?></em></h2>
                    </td>
                    <?php
                        $aantalRedditPosts++;
                    ?>
        </tr>
        <?php
                }
            }
        if ($aantalRedditPosts == 0) {
            echo "no reddit post available ";
        }
        ?>
    </table>
</div>
