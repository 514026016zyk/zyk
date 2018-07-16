<div class="col-md-3">
    <div class="row">
        <div class="panel product-hot">
            <div class="panel-body">
                <h2 class="margin-bottom-15 font-size-16 font-weight-300">热门推荐</h2>
                <ul class="blocks-2 blocks-sm-3 mob-masonry" data-scale='1'>
                    <?php
                    $args = array('post_type' => 'product', 'showposts' => 5,);query_posts($args);
                    if( have_posts() ) : while( have_posts() ) : the_post();
                    ?>
                    <li>
                        <a href="<?php the_permalink()?>" target="_blank" class="img" title="<?php the_title()?>">
                            <?php
                            $meta_data = get_post_meta(get_the_ID(), 'product_options', true);
                            $product_main_gallery =  $meta_data['product_main_gallery'];
                            $main_gallery = explode( ',', $meta_data['product_main_gallery'] );
                            ?>
                            <img src="<?php echo wp_get_attachment_image_src($main_gallery[0],full)[0]; ?>"
                                 class="cover-image" style='height:200px;' alt="<?php the_title()?>">
                        </a>
                        <a href="<?php the_permalink()?>" target="_blank" class="txt" title="<?php the_title()?>"><?php the_title()?>
                        </a>
                    </li>
                        <?php ;endwhile; endif; wp_reset_query()?>
                </ul>
            </div>
        </div>
    </div>
</div>