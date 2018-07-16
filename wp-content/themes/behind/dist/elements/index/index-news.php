<div id="mnews" class="module" style="background-image:url(<?php bloginfo('template_url')?>/dist/assets/images/1468826587571.jpg);">
    <div class="bgmask">
    </div>
    <div class="content layoutnone">
        <div class="header wow">
            <p class="title">
                新闻
            </p>
            <p class="subtitle">
                NEWS
            </p>
        </div>
        <div class="module-content" id="newslist">
            <div class="wrapper">
                <ul class="content_list" data-options-sliders="4" data-options-margin="0" data-options-ease="cubic-bezier(.73,-0.03,.24,1.01)" data-options-speed="0.8" data-options-mode="horizontal" data-options-wheel="0">
                    <?php
                    $i=0;
                    $args = array('category__in' => cs_get_option("select_cat"));
                    $news = new WP_Query( $args);
                    while ( $news->have_posts() ) : $news->the_post();
                        ?>
                        <li id="newsitem_<?php echo $i;?>" class='wow newstitem left'">
                        <a class="newscontent" target="_blank" href="<?php the_permalink()?>">
                            <div class="news_wrapper">
                                <div class="newsbody">
                                    <p class="date">
                                        <span class="md"><?php the_time('m-d')?><span>-</span></span><span class="year"><?php the_time('m-d')?></span>
                                    </p>
                                    <p class="title">
                                        <?php the_title()?>
                                    </p>
                                    <div class="separator">
                                    </div>
                                    <p class="description">
                                        <?php echo  the4_strimwidth(get_the_content(),30)?>
                                    </p>
                                </div>
                            </div>
                            <div class="newsimg" style="background-image:url(<?php the4_thumb()?>)">
                            </div>
                        </a>
                        <a href="<?php the_permalink()?>" target="_blank" class="details">more
                            <i class="fa fa-angle-right"></i>
                        </a>
                        </li>
                        <?php $i++;endwhile; wp_reset_query();?>
                </ul>
            </div>
        </div>
    </div>
</div>