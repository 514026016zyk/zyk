<div id="mpage" class="module">
    <div class="content">
        <div class="module-content">
            <div class="wrapper">
                <?php
                $select_page=cs_get_option('select_page') ;
                if(!empty($select_page)){
                    $args = array(
                        'page_id' =>cs_get_option('select_page') ,
                    );}else{
                    $args = array(
                        'page_id' =>1,
                    );
                }?>
                <?php $aboutus = new WP_Query( $args);
                while ( $aboutus->have_posts() ) : $aboutus->the_post();
                    ?>
                    <ul class="slider one">
                        <li>
                            <div class="header wow" data-wow-delay=".2s">
                                <p class="title">
                                    <?php the_title()?>
                                </p>
                                <p class="subtitle">
                                    ABOUT US
                                </p>
                            </div>
                            <div class="des-wrap">
                                <p class="description wow" data-wow-delay=".3s">
                                    <?php echo the4_strimwidth(get_the_content(),60)?>
                                </p>
                            </div>
                            <a href="<?php the_permalink()?>" class="more wow" data-wow-delay=".5s">MORE<i class="fa fa-angle-right"></i></a>
                            <div class="fimg wow" style="background-image:url(<?php the4_thumb()?>)">
                            </div>
                        </li>
                    </ul>
                <?php endwhile; wp_reset_query() ?>
            </div>
        </div>
    </div>
</div>