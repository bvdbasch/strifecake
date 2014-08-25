<?php
//read JsonArray from page and decode it to array
$streamerJsonArray = file_get_contents('http://streamapp.srsbsns.tv/Saves/streamers.json');
$streamers = json_decode($streamerJsonArray);
?>

<div id= "SidebarWrapper">
    <div id="SidebarHeader">Streamers</div>
    
    <div id="SidebarContent">
        <?php
            $aantalStreamers = 0;
            foreach($streamers as $streamer) {
            if($streamer->stream != null) {
        ?>
    
        <div style="display:block;float:left;">
            <img width="50" height="50" src="<?php echo $streamer->stream->channel->logo; ?>" />
        </div>
        <div style="display:block;float:left;padding-left:5px">
            <?php
                echo "<a target='_blank' href='".$streamer->stream->channel->url."'><strong>".$streamer->stream->channel->display_name. "</strong></a><br />";
                echo "Playing ".$streamer->stream->game."<br />";
                echo $streamer->stream->viewers." viewers";
            ?>
        </div>

        <?php
            $aantalStreamers++;
        ?>
        
        <br clear="both" />
        
        <?php
                }
            }
        if ($aantalStreamers == 0) {
            echo "There are currently no streamers online :( ";
        }
        ?>

    </div>
</div>
