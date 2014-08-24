<?php

$streamerJsonArray = file_get_contents('http://streamapp.srsbsns.tv/Saves/streamers.json');
$streamers = json_decode($streamerJsonArray);
?>

<div>
    <h2>Streamers</h2>
<div>
<?php
foreach($streamers as $streamer) {
    if($streamer->stream != null) {
?>
<div>
    <div style="display:block;float:left">
        <img width="60" height="60" src="<?php echo $streamer->stream->channel->logo; ?>" />
    </div>
    <div style="display:block;float:left">
<?php
        echo "<a href='".$streamer->stream->channel->url."'>".$streamer->stream->channel->display_name. "</a><br />";
        echo "Playing ".$streamer->stream->game."<br />";
        echo $streamer->stream->viewers." viewers";
?>
    </div>
</div>
<?php
    }
}
?>

</div>
</div>
