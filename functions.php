<?php

function theme_path() {
    $theme_folder = Config::meta('theme');
    return PATH . 'themes' . DS . $theme_folder . DS;
}
