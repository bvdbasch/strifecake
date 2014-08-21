<?php
  $bg = array('gael.jpg', 'lyrie.jpg', 'nestra.jpg', 'strife.jpg', 'tempra.jpg', 'vorbis.jpg' );    // array of background filenames

  $i = rand(0, count($bg)-1);                                                                       // generate random number size of the array
  $selectedBg = "$bg[$i]";                                                                          // set variable equal to which random filename was chosen
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo theme_url('/css/main.css'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <style>
        body{background: url(<?php echo theme_url("/img/$selectedBg"); ?>) no-repeat;}
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
    <div id="Slider">This area will hold the slider</div>
    <!-- END SLIDER -->
    
    <!-- SOCIAL ICONS START HERE -->
    <div class="" id="Social">
        This area will contain social buttons to facebook and twitter
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
    
    I changed something in the file again
    
</body>
</html>