<section id="product">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-12 section-heading text-center">
                <h2>相关推荐</h2>
            </div>
        </div>
        <div class="row">
            <div class="post-entry">
                <?php query_posts('showposts=4'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6">
                        <div class="post animate-box">
                            <a href="<?php the_permalink()?>"><img src="<?php the4_thumb()?>"></a>
                            <div>
                                <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
                                <p><?php the4_strimwidth(get_the_content(),50)?></p>
                                <span><a href="<?php the_permalink()?>">阅读全文</a></span>
                            </div>
                        </div>
                    </div>
                <?php endwhile;wp_reset_query()?>
            </div>
        </div>
    </div>
</section>