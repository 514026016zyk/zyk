<?php

# 常量定义[Constants]
# ------------------------------------------------------------------------------
define( 'THE4_THEME_NAME'      , 'behind'                                          );
define( 'THE4_THEME_AUTHOR'    , '4WL'                                          );
define( 'THE4_THEME_VERSION'   , '1.5.0'                                             );
define( 'THE4_CSS_PATH'        , get_template_directory_uri()."/dist/assets/css/"    );
define( 'THE4_JS_PATH'         , get_template_directory_uri()."/dist/assets/js/"     );
define( 'THE4_SRC_PATH'        , get_template_directory_uri()."/dist/assets/"        );
define( 'THE4_FUNCTIONS_PATH'  , get_template_directory_uri()."/dist/inc/wordpress/" );
define( 'THE4_SET_PATH'        , get_stylesheet_directory()  ."/dist/inc/setting/"   );
define( 'THE4_DEFAULT_IMG_PATH', get_template_directory_uri()."/screenshot.png"      );
define( 'THE4_IMG_PATH'        , get_template_directory_uri()."/dist/assets/images/" );

# 引用JS/CSS [enqueue]
# ------------------------------------------------------------------------------
require_once( dirname( __FILE__ ) . '/dist/inc/enqueue/enqueue-css.php'     );
require_once( dirname( __FILE__ ) . '/dist/inc/enqueue/enqueue-js.php'      );
require_once( dirname( __FILE__ ) . '/dist/inc/enqueue/enqueue-other.php'   );


# WORDPRESS设置和自定义 [WordPress Settings and Customizations]
# ------------------------------------------------------------------------------
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-add.php'              );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-branding.php'         );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-notice.php'           );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-page_nav.php'         );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-regMenu.php'          );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-remove.php'           );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-seo.php'              );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-widget.php'           );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-views.php'            );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-excerpt.php'          );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-strimwidth.php'       );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-list-category.php'    );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-the4.php'             );
require_once( dirname( __FILE__ ) . '/dist/inc/function/wp-comments.php'         );
require_once( dirname( __FILE__ ) . '/dist/inc/updater/theme-updater.php');

# 引用site_map功能 [Include the site_map ]
# ------------------------------------------------------------------------------
# require_once( dirname( __FILE__ ) . '/dist/inc/sitemap/sitemap.php'         );

# 引用cs框架 [Include the cs framework ]
# ------------------------------------------------------------------------------
require_once( dirname( __FILE__ ) . '/dist/inc/setting/cs-framework.php'    );


# 启用特色图像 [Support post-thumbnails ]
# ------------------------------------------------------------------------------
//add_theme_support( 'post-thumbnails'                                       );

# 去除wordpress前台顶部工具条
# ------------------------------------------------------------------------------
show_admin_bar(false);

//添加特色缩略图支持
if ( function_exists('add_theme_support') )add_theme_support('post-thumbnails');
//输出缩略图地址
function the4_thumb(){
    global $post;
    if( has_post_thumbnail() ){    //如果有特色缩略图，则输出缩略图地址
        $thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
        $post_thumbnail_src = $thumbnail_src [0];
    } else {
        $post_thumbnail_src = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        if(empty(has_post_thumbnail())){
            $random = mt_rand(1, 7);
            $post_thumbnail_src = THE4_SRC_PATH.'/thumbs/'.$random.'.jpg';
            //如果日志中没有图片，则显示默认图片
            //$post_thumbnail_src = get_template_directory_uri().'/images/default_thumb.jpg';
        }
    };
    echo $post_thumbnail_src;
}



