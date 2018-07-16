<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options[]    = array(
    'id'        => 'team_options',
    'title'     => '成员设置',
    'post_type' => 'team',
    'context'   => 'normal',
    'priority'  => 'high',
    'sections'  => array(
        array(
            'name'   => 'team_options_section',
            'fields' => array(
                array(
                    'id'        => 'member_name',
                    'type'      => 'text',
                    'title'     => '成员姓名',
                ),
                array(
                    'id'        => 'member_position',
                    'type'      => 'text',
                    'title'     => '成员职位',
                ),
                array(
                    'id'        => 'member_image',
                    'type'      => 'image',
                    'add_title' => '成员照片',
                    'title'     => '上传成员照片',
                ),
                array(
                    'id'        => 'member_description',
                    'type'      => 'textarea',
                    'title'     => '成员简介',
                    'desc'      => ''
                ),
            ),
        ),
    ),
);
//$options[]    = array(
//    'id'        => 'case_options',
//    'title'     => '案例详情',
//    'post_type' => 'case',
//    'context'   => 'normal',
//    'priority'  => 'high',
//    'sections'  => array(
//        array(
//            'name'   => 'case_options_section',
//            'fields' => array(
//                array(
//                    'id'        => 'case_xq',
//                    'type'      => 'wysiwyg',
//                    'title'     => '案例展示',
//                    'desc'      => '为了网站美观，建议此处只上传展示图片'
//                ),
//            ),
//        ),
//
//
//    ),
//);
CSFramework_Metabox::instance( $options );
