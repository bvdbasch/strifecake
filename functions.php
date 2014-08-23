<?php

function theme_path() {
    $theme_folder = Config::meta('theme');
    return $base = PATH . 'themes' . DS . $theme_folder . DS;
}
