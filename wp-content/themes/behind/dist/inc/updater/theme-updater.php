<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package themedd
 */

// Includes the files needed for the theme updater
if ( ! class_exists( 'Themedd_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new Themedd_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://4wl.cn',
		'item_name'      => 'behind',
		'theme_slug'     => 'behind',
		'version'        => THE4_THEME_VERSION,
		'author'         => THE4_THEME_AUTHOR,
		'download_id'    => '233', // Optional, used for generating a license renewal link
		'renew_url'      => '' // Optional, allows for a custom license renewal link
	),

	$strings = array(
		'theme-license'             => THE4_THEME_NAME . _x( '授权验证', 'part of the WordPress dashboard Themedd menu title', 'themedd' ),
		'enter-key'                 => __( '输入您的授权码.', 'themedd' ),
		'license-key'               => __( '授权码', 'themedd' ),
		'license-action'            => __( '授权验证', 'themedd' ),
		'deactivate-license'        => __( '解除授权' , 'themedd' ),
		'activate-license'          => __( '激活授权', 'themedd' ),
		'status-unknown'            => __( '授权发生了未知错误', 'themedd' ),
		'renew'                     => __( '刷新?', 'themedd' ),
		'unlimited'                 => __( 'unlimited', 'themedd' ),
		'license-key-is-active'     => __( '授权已激活.', 'themedd' ),
		'expires%s'                 => __( '%s 已过期.', 'themedd' ),
		'lifetime'                  => __( '终身授权.', 'themedd' ),
		'%1$s/%2$-sites'            => __( '您已经激活 %1$s 个站点（共可授权 %2$s 个站点）.', 'themedd' ),
		'license-key-expired-%s'    => __( '授权码已经过期 %s.', 'themedd' ),
		'license-key-expired'       => __( '授权码.', 'themedd' ),
		'license-keys-do-not-match' => __( '授权码不匹配.', 'themedd' ),
		'license-is-inactive'       => __( '此授权被远程计算机关闭.', 'themedd' ),
		'license-key-is-disabled'   => __( '验证码.', 'themedd' ),
		'site-is-inactive'          => __( '此站点授权被取消.', 'themedd' ),
		'license-status-unknown'    => __( '授权状态未知.', 'themedd' ),
		'update-notice'             => __( "进行更新的过程中，可能会导致您对主题的个性化设置丢失，请再升级前做好备份工作. 点击'Cancel'暂时不更新, 点击'OK' 继续更新.", 'themedd' ),
		'update-available'          => __( '<strong>%1$s %2$s</strong> 更新可用. <a href="%3$s" class="thickbox" title="%4s">查看更新详情</a> 或者 <a href="%5$s"%6$s>直接升级</a>.', 'themedd' )
	)
);

function the4_license_notify() {
    $status = get_option( 'chop_license_key_status' );
    if( $status != false && $status == 'valid' )
    return;
    if( !is_admin() ){
        wp_die(
            '<div class="no-verify-box" style="text-align: center;">
<img style="filter: invert(100%);" src="https://4wl.cn/wp-content/uploads/2018/03/logo-1.png">
<div class="no-verify-inner" style="background: #fff6dc;padding: 20px;margin-top: 20px;">
<p style="font-family:microsoft yahei;margin:10px 0;line-height:30px">您好，您未填写授权密匙！</br>请到第四维网络官网免费申请授权密钥：
<a href="https://4wl.cn/theme/behind">申请地址</a>
</p>
</div>
</div>'
        );
    }
}
add_action( 'wp_head', 'the4_license_notify' );
?>