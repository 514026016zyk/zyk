<?php
/**
 * 添加站点图标
 */
function add_fav(){
    $apple_icon=cs_get_option("apple_icon");
    $favicon=cs_get_option("favicon");
    echo  <<<EOT
<link rel="shortcut icon" href="$favicon" title="Favicon">
<link rel="apple-touch-icon" href="$apple_icon" />
EOT;
}
/**
 * 添加style
 */
function add_style_header(){

    $styles=cs_get_option("code_css");

    echo  "<style>".$styles."</style>";
}
add_action('wp_head', 'add_fav');
add_action('wp_head', 'add_style_header');


