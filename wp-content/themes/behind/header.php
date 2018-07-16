<!DOCTYPE html>
<?php
date_default_timezone_set('PRC'); //设置中国时区
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Roboto:300,400' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
<?php wp_head()?>
</head>
<body>
<div class="box-wrap">
    <header role="banner" id="fh5co-header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fh5co-navbar-brand">
                            <a class="fh5co-logo" href="<?php bloginfo('url')?>">
                                <img src="<?php echo the4_img('logo','')?>" alt="<?php bloginfo('name')?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav text-center">
                            <?php wp_menu('main_menu')?>
                        </ul>
                    </div>
<!--                    <div class="col-md-3">-->
<!--                        <ul class="social">-->
<!--                            <li><a href="http://sighttp.qq.com/msgrd?v=1&uin=1372446570"><i class="fa fa-qq"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-wechat"></i></a></li>-->
<!--                            <li><a href="#"><i class="fa fa-weibo"></i></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
            </nav>
        </div>
    </header>
    <!-- END: header -->