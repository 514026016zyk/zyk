<?php


# 添加WordPress后台底部版权  [Change the text in the admin footer]
#-------------------------------------------------------------------------------
function THE4_admin_footer_informations () {
    echo "Theme by <a href='https://www.4wl.cn/' target='_blank'>第四维网络</a>";
}

add_filter('admin_footer_text' , 'THE4_admin_footer_informations' );
