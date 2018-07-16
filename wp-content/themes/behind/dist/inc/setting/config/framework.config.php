<?php if ( ! defined( 'ABSPATH' ) ) { die; } // 不能直接访问网页.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// 主题框架设置
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$settings = array(
    'menu_title'      => THE4_THEME_NAME,
    'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
    'menu_slug'       => 'the4-theme'.'-'.wp_get_theme()->display('Name'),
    'menu_position'   => 59,
    'ajax_save'       => true,
    'show_reset_all'  => false,
    'menu_icon' => CS_URI.'/assets/images/setting.png',
    'framework_title' => wp_get_theme()->display('Name') .'<small class="oldVer" data-vs="'. THE4_THEME_VERSION . '" style="color:#979797;margin-left:10px">Release ' . THE4_THEME_VERSION .'</small>',
);
// ---------------------------------------
// 常规  --------------------------------
// ---------------------------------------
$options[]      = array(
    'name'        => 'overwiew',
    'title'       => '常规设置',
    'icon'        => 'fa fa-list',
    'fields'      => array(
        array(
            'type'    => 'subheading',
            'content' => 'Favicon和Logo设置',
        ),
        array(
            'id'        => 'logo',
            'type'      => 'image',
            'title'     => '添加 Logo',
            'help'      => '上传您的站点logo（推荐尺寸为:160*64 px）',
            'add_title' => '上传 Logo',
        ),
        array(
            'id'        => 'favicon',
            'type'      => 'image',
            'title'     => '添加 Favicon',
            'help'      => 'Favicon尺寸为：60*60 px',
            'add_title' => '上传 Favicon',
        ),
//        array(
//            'type'    => 'subheading',
//            'content' => '联系信息设置',
//        ),
//        array(
//            'id'      => 'address',
//            'type'    => 'text',
//            'title'   => '联系地址',
//            'default' => '某某省某某市某某街道10086号',
//        ),
//        array(
//            'id'      => 'mail',
//            'type'    => 'text',
//            'title'   => '联系邮箱',
//            'default' => '1111111@qq.com',
//        ),
//        array(
//            'id'      => 'tel',
//            'type'    => 'text',
//            'title'   => '电话',
//            'default' => '0938-88888888',
//        ),
//        array(
//            'id'      => 'weibo',
//            'type'    => 'text',
//            'title'   => '新浪微博',
//        ),
//        array(
//            'id'      => 'qq',
//            'type'    => 'text',
//            'title'   => 'QQ',
//            'default' => '88888888',
//        ),
//        array(
//            'id'      => 'vx_image',
//            'type'    => 'image',
//            'title'   => '微信',
//            'help'    => '微信二维码',
//            'add_title'=> '上传微信二维码',
//        ),
//        array(
//            'id'      => '110n',
//            'type'    => 'text',
//            'title'   => '备案号',
//            'default' => '陇1-88888888',
//        ),
//        array(
//            'id'      => 'word',
//            'type'    => 'text',
//            'title'   => '一句话介绍这个网站',
//        ),
//        array(
//            'id'            => 'select_cat',
//            'type'          => 'select',
//            'title'         => '选择要在首页作为新闻中心展示的文章分类',
//            'options'       => 'categories',
//        ),
//        array(
//            'id'            => 'select_page',
//            'type'          => 'select',
//            'title'         => '选择要在首页作为公司简介展示的页面',
//            'options'       => 'pages',
//        ),
//        array(
//            'id'            => 'select_page2',
//            'type'          => 'select',
//            'title'         => '选择要在首页作为站长信息展示的页面',
//            'options'       => 'pages',
//        ),
//        array(
//            'type'    => 'subheading',
//            'content' => '首页展示版块名称设置',
//        ),
//        array(
//            'id'      => 'product_title',
//            'type'    => 'text',
//            'title'   => '产品版块标题',
//        ),
//        array(
//            'id'      => 'product_subtitle',
//            'type'    => 'text',
//            'title'   => '产品版块副标题',
//        ),
//        array(
//            'id'      => 'news_title',
//            'type'    => 'text',
//            'title'   => '新闻版块标题',
//        ),
//        array(
//            'id'      => 'news_subtitle',
//            'type'    => 'text',
//            'title'   => '新闻版块副标题',
//        ),
//        array(
//            'id'    => 'contact_shortcode',
//            'type'  => 'wysiwyg',
//            'title' => '填入联系表单的短代码',
//        ),

    ),
);
// ----------------------------------------
// 幻灯片----------------------------------
// ----------------------------------------
//$options[]      = array(
//    'name'        => 'slider_options',
//    'title'       => '幻灯片设置',
//    'icon'        => 'fa fa-sliders',
//    'fields'      => array(
//        array(
//            'type'    => 'subheading',
//            'content' => '幻灯片设置',
//        ),
//        array(
//            'id'              => 'slider_Current',
//            'type'            => 'group',
//            'title'           => '添加幻灯片',
//            'button_title'    => '添加幻灯片',
//            'accordion_title' => '添加一张幻灯片',
//            'fields'          => array(
//                array(
//                    'id'      => 'slider_title',
//                    'type'    => 'text',
//                    'title'   => '幻灯片标题',
//                ),
//                array(
//                    'id'      => 'slider_dsc',
//                    'type'    => 'textarea',
//                    'title'   => '幻灯片描述',
//                ),
//                array(
//                    'id'      => 'slider_img',
//                    'type'    => 'image',
//                    'title'   => '幻灯片图片',
//                ),
//                array(
//                    'id'      => 'slider_linkTo',
//                    'type'    => 'text',
//                    'title'   => '幻灯片链接',
//                    'desc'  => '需要带上http://(或者https://)',
//                ),
//                array(
//                    'id'      => 'slider_linkTi',
//                    'type'    => 'text',
//                    'title'   => '幻灯片链接标题',
//                ),
//
//            )
//        ),
//    ),
//);
// ---------------------------------------
// 首页布局--------------------------------
// ---------------------------------------
//$options[]      = array(
//    'name'        => '首页布局',
//    'title'       => '首页布局',
//    'icon'        => 'fa fa-random',
//    'fields'      => array(
//        array(
//            'type'    => 'notice',
//            'class'   => 'info',
//            'content' => '拖拽模块选择开启与关闭，也可以拖拽模块进行排列顺序',
//        ),
//        array(
//            'id'             => 'index-buju',
//            'type'           => 'sorter',
//            'title'          => '网站首页布局',
//            'default'        => array(
//                'enabled'      => array(
//                ),
//                'disabled'     => array(
//                    'slider'   => '首页幻灯片',
//                    'feature'  => '特殊版块',
//                    'product'  => '产品版块',
//                    'about'   => '关于我们',
//                    'news'    => '新闻版块',
//                    'contact'  => '联系版块',
//                ),
//            ),
//        ),
//
//    ), // end: fields
//);
// ----------------------------------------
// 特殊版块--------------------------------
// ----------------------------------------
//$options[]      = array(
//    'name'     => 'teshubankuai',
//    'title'    => '特殊板块设置',
//    'icon'     => 'fa fa-sliders',
//    'fields'      => array(
//        array(
//            'id'              => 'feature',
//            'type'            => 'group',
//            'title'           => '特殊板块设置',
//            'desc'            => '最多添加3个',
//            'button_title'    => '添加信息',
//            'accordion_title' => '添加信息',
//            'fields'          => array(
//                array(
//                    'id'      => 'feature_title',
//                    'type'    => 'text',
//                    'title'   => '标题',
//                ),
//                array(
//                    'id'      => 'feature_dsc',
//                    'type'    => 'textarea',
//                    'title'   => '描述',
//                ),
//                array(
//                    'id'      => 'feature_fa',
//                    'type'    => 'icon',
//                    'title'   => '选择图标',
//                ),
//            ),
//        ),
//    ), // end: fields
//);
// ----------------------------------------
// 合作伙伴
// ----------------------------------------
//$options[]      = array(
//    'name'     => 'customer',
//    'title'    => '添加合作伙伴',
//    'icon'     => 'fa fa-users',
//    // begin: fields
//    'fields'      => array(
//        array(
//            'id'              => 'customer',
//            'type'            => 'group',
//            'title'           => '合作伙伴',
//            'button_title'    => '添加合作伙伴',
//            'accordion_title' => '添加合作伙伴',
//            'fields'          => array(
//                array(
//                    'id'      => 'customer_url',
//                    'type'    => 'text',
//                    'title'   => '跳转链接',
//                ),
//                array(
//                    'id'          => 'customer_img',
//                    'type'        => 'upload',
//                    'title'       => '上传合作伙伴Logo',
//                ),
//
//
//            )
//        ),
//    ), // end: fields
//);
// ----------------------------------------
// 列表页面背景图---------------------------
// ----------------------------------------
//$options[]      = array(
//    'name'        => 'banner',
//    'title'       => '背景图设置',
//    'icon'        => 'fa fa-file-image-o',
//    'fields'      => array(
//        array(
//            'id'        => 'archive_product_banner',
//            'type'      => 'image',
//            'title'     => '产品列表页banner图',
//        ),
//        array(
//            'id'        => 'archive_news_banner',
//            'type'      => 'image',
//            'title'     => '新闻列表页banner图',
//        ),
//        array(
//            'id'        => 'page_banner',
//            'type'      => 'image',
//            'title'     => '页面banner图',
//        ),
//
//    ),
//);
// ----------------------------------------
// SEO-------------------------------------
// ----------------------------------------
$options[] = array(
    'name'  => 'speed',
    'title' => 'SEO设置',
    'icon'  => 'fa fa-server',

    'fields' => array(

        array(
            'type'    => 'subheading',
            'content' => 'SEO',
        ),

        array(
            'id'      => 'site_seo_switch',
            'type'    => 'switcher',
            'title'   => '主题自带SEO',
            'help'    => '开启后将使用主题自带SEO设置',
            'default' => true
        ),

        array(
            'type'    => 'subheading',
            'content' => '全局SEO功能设定',
        ),

        array(
            'id'      => 'seo_auto_des',
            'type'    => 'switcher',
            'title'   => '文章页描述',
            'help'    => '开启后将自动截取文章内容作为文章description标签',
            'default' => true
        ),

        array(
            'id'    => 'seo_auto_des_num', // this is must be unique
            'type'  => 'text',
            'title' => '自动截取字节数',
            'default' => '120',
            'dependency'   => array( 'seo_auto_des', '==', true ),
        ),

        array(
            'id'      => 'seo_sep', // this is must be unique
            'type'    => 'text',
            'title'   => 'Title后缀分隔符',
            'default' => ' - ',
        ),

        array(
            'type'    => 'subheading',
            'content' => '首页SEO设置',
        ),

        array(
            'id'    => 'seo_home_title', // this is must be unique
            'type'  => 'text',
            'title' => '首页标题',
            'help'  => '关键词使用英文逗号隔开',
        ),

        array(
            'id'    => 'seo_home_keywords', // this is must be unique
            'type'  => 'text',
            'title' => '首页关键词',
        ),

        array(
            'id'    => 'seo_home_desc', // this is must be unique
            'type'  => 'textarea',
            'title' => '首页描述',
        ),


    ),
);
// ----------------------------------------
// 地图配置--------------------------------
// ----------------------------------------
//$options[]      = array(
//    'name'        => 'ditupeizhi',
//    'title'       => '地图页面配置',
//    'icon'        => 'fa fa-map-marker',
//    // begin: fields
//    'fields'      => array(
//
//        array(
//            'type'    => 'notice',
//            'class'   => 'danger',
//            'content' => '请确保已创建地图页面。“ 后台 - 页面 - 新建页面 - 页面属性 - 模板 - 地图页面 ”',
//        ),
//        array(
//            'id'     => 'dtmishi',
//            'type'   => 'text',
//            'before' => '<h4>地图密钥</h4>',
//            'attributes' => array(
//                'style'    => 'width: 100%;'
//            ),
//            'after'  => '<p class="cs-text-muted">百度地图没有密钥是不能调用的，获取地址：http://lbsyun.baidu.com/apiconsole/key</p>',
//        ),
//        array(
//            'id'     => 'zuobiao',
//            'type'   => 'text',
//            'before' => '<h4>地址坐标</h4>',
//            'attributes' => array(
//                'style'    => 'width: 100%;'
//            ),
//            'after'  => '<p class="cs-text-muted">输入地址坐标，坐标获取地址：http://api.map.baidu.com/lbsapi/getpoint/index.html</p>',
//        ),
//        array(
//            'id'        => 'ditu-img',
//            'type'      => 'image',
//            'title'     => '公司标识',
//            'help'      => '上传您的站点logo（建议尺寸：139*104）',
//            'add_title' => '上传 Logo',
//        ),
//        array(
//            'id'     => 'dzmc',
//            'type'   => 'text',
//            'before' => '<h4>公司名称</h4>',
//            'attributes' => array(
//                'style'    => 'width: 100%;'
//            ),
//            'after'  => '<p class="cs-text-muted">输入公司名称</p>',
//        ),
//        array(
//            'id'     => 'dtxxms',
//            'type'   => 'text',
//            'before' => '<h4>详细描述</h4>',
//            'attributes' => array(
//                'style'    => 'width: 100%;'
//            ),
//            'after'  => '<p class="cs-text-muted">输入公司详细描述</p>',
//        ),
//        array(
//            'id'     => 'baiduditu',
//            'type'   => 'text',
//            'before' => '<h4>地图页面链接</h4>',
//            'attributes' => array(
//                'style'    => 'width: 100%;'
//            ),
//            'after'  => '<p class="cs-text-muted">填入地图页面链接，用于手机端底部调用</p>',
//        ),
//
//
//    ), // end: fields
//);

// ----------------------------------------
// 备份------------------------------------
// ----------------------------------------
$options[]   = array(
    'name'     => 'advanced',
    'title'    => '备份',
    'icon'     => 'fa fa-shield',
    'fields'   => array(

        array(
            'type'    => 'notice',
            'class'   => 'warning',
            'content' => '您可以保存当前的选项，下载一个备份和导入.',
        ),

        // 备份
        array(
            'type'    => 'backup',
        ),

    )
);


CSFramework::instance( $settings, $options );


