<?php



//去掉Wordpres挂件
function THE4_disable_dashboard_widgets() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');//近期评论
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal');//近期草稿
    remove_meta_box('dashboard_primary', 'dashboard', 'core');//wordpress博客
    remove_meta_box('dashboard_secondary', 'dashboard', 'core');//wordpress其它新闻
    remove_meta_box('dashboard_right_now', 'dashboard', 'core');//wordpress概况
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');//wordresss链入链接
    remove_meta_box('dashboard_plugins', 'dashboard', 'core');//wordpress链入插件
    remove_meta_box('dashboard_quick_press', 'dashboard', 'core');//wordpress快速发布
}
add_action('admin_menu', 'THE4_disable_dashboard_widgets');





// Hello widget
function THE4_dashboard_widget ()
{

    // Fetch User Informations
    global $current_user;
    wp_get_current_user();

    // Widget Informations
    $widgetSlug     = 'THE4_dashboard';
    $widgetTitle    =  "来自开发者的一封信";
    $widgetFunction = 'THE4_widget_content';

    // Widget Options
    wp_add_dashboard_widget($widgetSlug , $widgetTitle , $widgetFunction);
}
add_action( 'wp_dashboard_setup', 'THE4_dashboard_widget' );



# ---------------------------------------
# Widget Content
# ---------------------------------------
function THE4_widget_content()
{

    // Widget Content

    ?>

    <p>
        首先，十分感谢您使用这款来自 <a href="https://www.4wl.cn/">四维网络</a>的WordPress主题。
    </p>
    <p>
        我们是一个新近涉足WordPress开发的开发团队。
    </p>
    <p>
        尽管在制作这款主题之前，我们学习了业内诸多优秀开发者的模板作品。
        但难免会有经验欠缺之处。
        如若在您使用中发现主题的不足，欢迎您反馈邮件至
        <a href="mailto:career@4wl.cn" target="_blank">career@4wl.cn</a>
    </p>

    <p style="margin-top: 50px;width: 100%;text-align: right ">

        <span class="display:block;text-align:center">四维网络团队</span>
        <br>
        <span class="display:block;margin-right:10px;">2018-2-19</span>

    </p>
    <?php
}