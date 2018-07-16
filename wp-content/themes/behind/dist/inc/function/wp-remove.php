<?php

# 移除WordPress冗余功能 [Remove metas for RSS and other stuff ]
remove_action( 'wp_head'             , 'feed_links', 2                          );
remove_action( 'wp_head'             , 'feed_links_extra', 3                    );
remove_action( 'wp_head'             , 'rsd_link'                               );
remove_action( 'wp_head'             , 'wlwmanifest_link'                       );
remove_action( 'wp_head'             , 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head'             , 'wp_generator'                           );
remove_action( 'wp_head'             , 'wp_shortlink_wp_head', 10, 0            );
remove_action( 'wp_head'             , 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts' , 'print_emoji_detection_script' );
remove_action( 'wp_print_styles'     , 'print_emoji_styles' );
remove_action( 'admin_print_styles'  , 'print_emoji_styles' );



# 调整WordPress精度 [Change the default jpeg compression]
# ------------------------------------------------------------------------------
function THE4_jpeg_quality( $args ) {
    return 85;
}



# 删除包括在文章内容中图片两边的p标签  [Remove p around images]
# ------------------------------------------------------------------------------
function THE4_remove_p($content){
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}


# 删除空的p标签  [Remove empty p]
# ------------------------------------------------------------------------------
function THE4_remove_empty_p( $content ){
    $content = preg_replace( array(
        '#<p>\s*<(div|aside|section|article|header|footer)#',
        '#</(div|aside|section|article|header|footer)>\s*</p>#',
        '#</(div|aside|section|article|header|footer)>\s*<br ?/?>#',
        '#<(div|aside|section|article|header|footer)(.*?)>\s*</p>#',
        '#<p>\s*</(div|aside|section|article|header|footer)#',
    ), array(
        '<$1',
        '</$1>',
        '</$1>',
        '<$1$2>',
        '</$1',
    ), $content );

    return preg_replace('#<p>(\s|&nbsp;)*+(<br\s*/*>)*(\s|&nbsp;)*</p>#i', '', $content);
}


# 调整自带文章编辑器 [Custom TinyMce]
# ------------------------------------------------------------------------------
function THE4_custom_mce( $settings )
{
    $settings['remove_linebreaks']            = false;
    $settings['keep_styles']                  = false;
    $settings['accessibility_focus']          = true;
    $settings['media_strict']                 = false;
    $settings['paste_remove_styles']          = true;
    $settings['paste_remove_spans']           = true;
    $settings['paste_strip_class_attributes'] = 'none';
    $settings['paste_text_use_dialog']        = true;
    $settings['toolbar1']                     = 'bold,italic,link,unlink ';
    $settings['toolbar2']                     = '';
    $settings['toolbar3']                     = '';
    $settings['toolbar4']                     = '';

    return $settings;
}


// In Editor TinyMCE Settings
function THE4_custom_kirki_mce( $buttons, $editor_id )
{
    return array( 'bold' , 'italic' , 'link' , 'unlink' );
}

# All the filters and actions
# ------------------------------------------------------------------------------
add_filter( 'jpeg_quality'         , 'THE4_jpeg_quality'                   );
add_filter( 'the_content'          , 'THE4_remove_p'                       );
add_filter( 'the_content'          , 'THE4_remove_empty_p', 20, 1          );
add_filter( 'tiny_mce_before_init' , 'THE4_custom_mce'                     );
add_filter( 'teeny_mce_buttons'    , 'THE4_custom_kirki_mce', 10, 2        );

