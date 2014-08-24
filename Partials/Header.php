<?php
    //Fetch Check Which Page we at. Important for what Section we should Load.
    //Either Load Frontpage, Or a Category Page
    $page = end((explode('/', current_url()))); 

    //the code for a random background is found here
    include(theme_path()."Partials/RandomBackground.php");
    //the code for the Category colors has to be maintained in CategoryColor.php
    include(theme_path()."Partials/CategoryColor.php");
?>

