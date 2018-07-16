<?php

# 加载CSS到<head>中  [Enqueue css]
function THE4_enqueue_styles()
{
    wp_enqueue_style('animate', THE4_CSS_PATH."animate.css"  , array(), THE4_THEME_VERSION, 'all');
    wp_enqueue_style('icomoon' , THE4_CSS_PATH."icomoon.css"   , array(), THE4_THEME_VERSION, 'all');
    wp_enqueue_style('bootstrap' , THE4_CSS_PATH."bootstrap.css"   , array(), THE4_THEME_VERSION, 'all');
    wp_enqueue_style('style' , THE4_CSS_PATH."style.css"   , array(), THE4_THEME_VERSION, 'all');
}
# Add CSS to the theme
add_action('wp_enqueue_scripts', 'THE4_enqueue_styles', 999);
