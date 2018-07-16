<div id="mteam" data-title="" class="module">
    <div class="bgmask">
    </div>
    <div class="content layoutnone">
        <div class="header wow">
            <p class="title">
                团队
            </p>
            <p class="subtitle">
                Team
            </p>
        </div>
        <div class="module-content fw">
            <div class="wrapper">
                <ul class="content_list" data-options-sliders="3" data-options-margin="20" data-options-ease="cubic-bezier(.73,-0.03,.24,1.01)" data-options-speed="1">
                    <?php query_posts(array( 'post_type' => 'team','showposts' =>3)); ?>
                    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php  $meta_data = get_post_meta(get_the_ID(), 'team_options', true);
                           $image_id = $meta_data['member_image'];
                           $attachment = wp_get_attachment_image_src( $image_id, 'full' );?>
                        <li id="teamitem_1" class="wow">
                            <div class="header wow" data-wow-delay=".1s">
                                <a href="<?php the_permalink()?>" target="_blank">
                                    <img src="<?php echo $attachment[0]?>" width="180" height="180"/></a>
                            </div>
                            <div class="summary wow">
                                <p class="title">
                                    <a href="<?php the_permalink()?>"><?php echo $meta_data['member_name']?></a>
                                </p>
                                <p class="subtitle">
                                    <?php echo $meta_data['member_position']?>
                                </p>
                                <p class="description wow"><?php echo $meta_data['member_description']?></p>
                            </div>
                            <a href="<?php the_permalink()?>" target="_blank" class="details">more
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    <?php endwhile; endif; wp_reset_query()?>
                </ul>
            </div>
        </div>
    </div>
</div>