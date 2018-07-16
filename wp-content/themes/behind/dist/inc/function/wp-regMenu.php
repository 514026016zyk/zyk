<?php
//注册菜单
register_nav_menus(array(
    'main_menu' => '顶部菜单',
    'foot_menu' => '底部菜单',
));
function wp_menu($location){
    if ( function_exists( 'wp_nav_menu' ) && has_nav_menu($location) ) {
        wp_nav_menu( array( 'container' => false, 'items_wrap' => '%3$s', 'theme_location' => $location, 'depth'=>2 ) );
    } else {
        echo '<li><a href="'.get_bloginfo('url').'/wp-admin/nav-menus.php">请到[后台->外观->菜单]中设置菜单。</a></li>';
    }
}
