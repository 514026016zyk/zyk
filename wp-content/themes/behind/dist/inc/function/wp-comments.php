<?php
/* 评论作者链接新窗口打开 */
function specs_comment_author_link() {
    $url    = get_comment_author_url( $comment_ID );
    $author = get_comment_author( $comment_ID );
    if ( empty( $url ) || 'http://' == $url )
        return $author;
    else
        return "<a target='_blank' href='$url' rel='external nofollow' class='url'>$author</a>";
}
add_filter('get_comment_author_link', 'specs_comment_author_link');
/* 设置评论字数限制开始 */
function set_comments_length($commentdata) {
    $minCommentlength = 5;		//最少字数限制
    $maxCommentlength = 200;	//最多字数限制
    $pointCommentlength = mb_strlen($commentdata['comment_content'],'UTF8');	//mb_strlen 1个中文字符当作1个长度
    if ($pointCommentlength < $minCommentlength){
        err('抱歉，您的评论字数过少，请至少输入' . $minCommentlength .'个字（目前字数：'. $pointCommentlength .'个字）');
        exit;
    }
    if ($pointCommentlength > $maxCommentlength){
        err('对不起，您的评论字数过多，请少于' . $maxCommentlength .'个字（目前字数：'. $pointCommentlength .'个字）');
        exit;
    }
    return $commentdata;
}
add_filter('preprocess_comment', 'set_comments_length');
/* 设置评论字数限制结束 */

/*过滤wordpress评论中的html代码*/
function plc_comment_post( $incoming_comment ) {
    $incoming_comment['comment_content'] = htmlspecialchars($incoming_comment['comment_content']);
    $incoming_comment['comment_content'] = str_replace( "'", '&apos;', $incoming_comment['comment_content'] );
    return( $incoming_comment );
}
function plc_comment_display( $comment_to_display ) {
    $comment_to_display = str_replace( '&apos;', "'", $comment_to_display );
    return $comment_to_display;
}
add_filter( 'preprocess_comment', 'plc_comment_post', '', 1);
add_filter( 'comment_text', 'plc_comment_display', '', 1);
add_filter( 'comment_text_rss', 'plc_comment_display', '', 1);
add_filter( 'comment_excerpt', 'plc_comment_display', '', 1);
// 评论回复
function weisay_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    global $commentcount,$wpdb, $post;
    if(!$commentcount) { //初始化楼层计数器
        $comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_post_ID = $post->ID AND comment_type = '' AND comment_approved = '1' AND !comment_parent");
        $cnt = count($comments);//获取主评论总数量
        $page = get_query_var('cpage');//获取当前评论列表页码
        $cpp=get_option('comments_per_page');//获取每页评论显示数量
        if (ceil($cnt / $cpp) == 1 || ($page > 1 && $page  == ceil($cnt / $cpp))) {
            $commentcount = $cnt + 1;//如果评论只有1页或者是最后一页，初始值为主评论总数
        } else {
            $commentcount = $cpp * $page + 1;
        }
    }
    ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
    <article id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <div class="comment-meta ">
            <?php $add_below = 'div-comment'; ?>
            <div class="comment-author vcard">
                <?php echo get_avatar( $comment, 40 ); ?>
            </div>
            <div class="comment-chat" <?php if(get_avatar($comment, 40)==true)?>>
                <div class="comment-metadata"><div class="fn"><?php comment_author_link() ?><?php if($comment->user_id == 1) echo '<span id="comment_admin">博主</span>' ?></div> :<?php edit_comment_link('编辑','&nbsp;&nbsp;',''); ?><time><?php echo timeago( $comment->comment_date_gmt ); ?></time> <div class="reply"><?php comment_reply_link(array_merge( $args, array('reply_text' => '回复', 'add_below' =>$add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div></div>
                <?php if ( $comment->comment_approved == '0' ){?><span style="color:#C00; font-style:inherit">您的评论正在等待审核中...</span><br /><?php } ?>
                <?php comment_text() ?>
            </div>
        </div>
        <div class="clear"></div>
    </article>
    <?php
}
function weisay_end_comment() {
    echo '</li>';
}
//时间倒计时
function timeago( $ptime ) {
    $ptime = strtotime($ptime);
    $etime = time() - $ptime;
    if($etime < 1) return __('刚刚');
    $interval = array (
        12 * 30 * 24 * 60 * 60  =>  __('年前', 'haoui').' ('.date('Y-m-d', $ptime).')',
        30 * 24 * 60 * 60       =>  __('个月前', 'haoui').' ('.date('m-d', $ptime).')',
        7 * 24 * 60 * 60        =>  __('周前', 'haoui').' ('.date('m-d', $ptime).')',
        24 * 60 * 60            =>  __('天前', 'haoui'),
        60 * 60                 =>  __('小时前', 'haoui'),
        60                      =>  __('分钟前', 'haoui'),
        1                       =>  __('秒前', 'haoui')
    );
    foreach ($interval as $secs => $str) {
        $d = $etime / $secs;
        if ($d >= 1) {
            $r = round($d);
            return $r . $str;
        }
    };
}
//评论html过滤
function loo_comment_post( $incoming_comment ) {
    $incoming_comment['comment_content'] = htmlspecialchars($incoming_comment['comment_content']);
    $incoming_comment['comment_content'] = str_replace( "'", '&apos;', $incoming_comment['comment_content'] );
    return( $incoming_comment );
}
function loo_comment_display( $comment_to_display ) {
    $comment_to_display = str_replace( '&apos;', "'", $comment_to_display );
    return $comment_to_display;
}
add_filter( 'preprocess_comment', 'loo_comment_post', '', 1);
add_filter( 'comment_text', 'loo_comment_display', '', 1);
add_filter( 'comment_text_rss', 'loo_comment_display', '', 1);
add_filter( 'comment_excerpt', 'loo_comment_display', '', 1);
//登陆显示头像
//function weisay_get_avatar($email, $size = 48){
//    return get_avatar($email, $size);
//}
//评论回复邮件通知（所有回复都邮件通知）*（美化版）
function comment_mail_notify($comment_id) {
    $comment = get_comment($comment_id);
    $parent_id = $comment->comment_parent ? $comment->comment_parent : '';
    $spam_confirmed = $comment->comment_approved;
    if (($parent_id != '') && ($spam_confirmed != 'spam')) {
        $wp_email = 'no-reply@' . preg_replace('#^www\.#', '', strtolower($_SERVER['SERVER_NAME'])); //e-mail 发出点, no-reply 可改为可用的 e-mail.
        $to = trim(get_comment($parent_id)->comment_author_email);
        $subject = '您在 [' . get_option("blogname") . '] 的留言有了回复';
        $message = '
<div style="background-color:#fff; border:1px solid #666666; color:#111;
-moz-border-radius:8px; -webkit-border-radius:8px; -khtml-border-radius:8px;
border-radius:8px; font-size:12px; width:702px; margin:0 auto; margin-top:10px;
font-family:微软雅黑, Arial;">
<div style="background:#666666; width:100%; height:60px; color:white;
-moz-border-radius:6px 6px 0 0; -webkit-border-radius:6px 6px 0 0;
-khtml-border-radius:6px 6px 0 0; border-radius:6px 6px 0 0; ">
<span style="height:60px; line-height:60px; margin-left:30px; font-size:12px;">
您在<a style="text-decoration:none; color:#00bbff;font-weight:600;"
href="' . get_option('home') . '"> ' . get_option('blogname') . '
</a>博客上的留言有回复啦！</span></div>
<div style="width:90%; margin:0 auto">
<p>' . trim(get_comment($parent_id)->comment_author) . ', 您好!</p>
<p>您曾在 [' . get_option("blogname") . '] 的文章
《' . get_the_title($comment->comment_post_ID) . '》 上发表评论:
<p style="background-color: #EEE;border: 1px solid #DDD;
padding: 20px;margin: 15px 0;"> ' . (get_comment($parent_id)->comment_content) . '</p>
<p>' . trim($comment->comment_author) . ' 给您的回复如下:
<p style="background-color: #EEE;border: 1px solid #DDD;padding: 20px;
margin: 15px 0;"> ' . ($comment->comment_content) . '</p>
<p>您可以点击 <a style="text-decoration:none; color:#00bbff"
href="' . htmlspecialchars(get_comment_link($parent_id)) . '">查看回复的完整內容</a></p>
<p>欢迎再次光临 <a style="text-decoration:none; color:#00bbff"
href="' . get_option('home') . '">' . get_option('blogname') . '</a></p>
<p>(此邮件由系统自动发出, 请勿回复.)</p>
</div>
</div>';
        $message = convert_smilies($message);
        $from = "From: \"" . get_option('blogname') . "\" <$wp_email>";
        $headers = "$from\nContent-Type: text/html; charset=" . get_option('blog_charset') . "\n";
        wp_mail( $to, $subject, $message, $headers );
//echo 'mail to ', $to, '<br/> ' , $subject, $message; // for testing
    }
}
add_action('comment_post', 'comment_mail_notify');

//Gravatar头像
function get_avatar_loo($avatar) {
    $protocol=is_ssl()?'https':'http';
    $avatar_source='cn.gravatar.com';
    $avatar = preg_replace('/.*\/avatar\/(.*)\?s=([\d]+)&.*/','<img src="'.$protocol.'://'.$avatar_source.'/avatar/$1?s=$2" class="avatar avatar-$2" height="$2" width="$2">',$avatar);
    return $avatar;
}
add_filter('get_avatar', 'get_avatar_loo');