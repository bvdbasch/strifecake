<!--Slider Settings here-->
<script>
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            auto: true
        });
    });
</script>

<!--Slider data here, styling is in CSS -->
<div id="Slider">
    <ul class="bxslider">
        <li><a href="<?php echo base_url('/posts/strife-school-5-improvement'); ?>"><img src="<?php echo theme_url('/Resources/IMG/Slider/strife-school-slider.png') ?>" /></a></li>
        <li><a href="<?php echo base_url('/posts/strife-synergy-3-blitz-and-vip'); ?>"><img src="<?php echo theme_url('/Resources/IMG/Slider/strife-synergy-slider.png') ?>" /></a></li>
        <li><a href="<?php echo base_url('posts/life-outside-of-strife-s2-vicious'); ?>"><img src="<?php echo theme_url('/Resources/IMG/Slider/los-slider.png') ?>" /></a></li>
    </ul>
</div>
