<?php
//read JsonArray from page and decode it to array
$streamerJsonArray = file_get_contents('http://streamapp.srsbsns.tv/Saves/streamers.json');
$streamers = json_decode($streamerJsonArray);
?>

<div>
    <h2>Streamers</h2>
<div>
<?php
$aantalStreamers = 0;
foreach($streamers as $streamer) {
    if($streamer->stream != null) {
?>
<div>
    <div style="display:block;float:left">
        <img width="50" height="50" src="<?php echo $streamer->stream->channel->logo; ?>" />
    </div>
    <div style="display:block;float:left; padding-left:5px">
<?php
        echo "<a href='".$streamer->stream->channel->url."'><strong>".$streamer->stream->channel->display_name. "</strong></a><br />";
        echo "Playing ".$streamer->stream->game."<br />";
        echo $streamer->stream->viewers." viewers";
?>
    </div>
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
