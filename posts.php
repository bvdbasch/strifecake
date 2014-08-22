<?php
    $backgroundArray = array('gael.jpg', 'lyrie.jpg', 'nestra.jpg', 'strife.jpg', 'tempra.jpg', 'vorbis.jpg' );
    $bgIMG = $backgroundArray[array_rand($backgroundArray)];

    //Fetch category
    //$category = end((explode('/', current_url())));
    echo category_title();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo theme_url('/Resources/CSS/main.css'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- jQuery library (served from Google) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="<?php echo theme_url('/Resources/Slider/jquery.bxslider.min.js'); ?>"></script>
    <!-- bxSlider CSS file -->
    <link href="<?php echo theme_url('/Resources/Slider/jquery.bxslider.css'); ?>" rel="stylesheet" />
    <style>
        body{background: url(<?php echo theme_url("/Resources/IMG/Backgrounds/".$bgIMG); ?>) no-repeat;}
    </style>
</head>

<body>
<div id="MainWrapper">

    <!-- MENU STARTS HERE -->
    <div id="Navigation">

        <ul id="menu">
        <li class="nav"><a href="<?php echo base_url(); ?>">&nbsp Home &nbsp</a></li>
        <?php while(categories()): ?>
       <li class="nav"><a href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>">&nbsp <?php echo category_title(); ?> &nbsp</a></li>
        <?php endwhile; ?>
    </ul>
    </div>
    <div id="BarBlue"></div>
    <!-- END MENU -->

    <!-- SLIDER STARTS HERE -->
    <script>
        $(document).ready(function(){
            $('.bxslider').bxSlider();
        });
    </script>

    <div id="Slider">
        <ul class="bxslider">
            <li><img src="<?php echo theme_url('/Resources/Slider/Images/strife-school-header.png') ?>" /></li>
            <li><img src="http://bxslider.com/images/home_slides/picto.png" /></li>
            <li><img src="http://bxslider.com/images/home_slides/picto.png" /></li>
            <li><img src="http://bxslider.com/images/home_slides/picto.png" /></li>
        </ul>
    </div>
    <!-- END SLIDER -->

    <!-- SOCIAL ICONS START HERE -->
    <div id="Social">
        <img class="social" src="<?php echo theme_url('/Resources/IMG/Social/YouTubeIcon.png'); ?>" alt="Find us on YouTube!">
    </div>
    <!-- END SOLCIAL ICONS -->

    <!-- CATEGORIES START HERE -->
    <div id="LeftContainer">
        <div id="CategoryLeft">This will contain the category header image - News
        <div id="BarBlue"></div>
        <div id="CategoryList">Look mom! Content!</div>
        </div>

        <div id="CategoryRight">This will contain the category header image - Learn
        <div id="BarYellow"></div>
        <div id="CategoryList">Look mom! Content!</div>
        </div>

    </div>

    <div id="RightContainer">This is the sidebar. It would like some widgets</div>>

    </div>

    <!-- END CATEGORIES -->
</body>
</html>
