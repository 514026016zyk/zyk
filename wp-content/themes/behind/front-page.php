<?php get_header()?>
		<section id="intro">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
						<div class="intro animate-box">
							<h2><?php  bloginfo('description')?></h2>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="work">
			<div class="container">
				<div class="row">
                    <?php
                        $i=1;
                        if(have_posts()):while (have_posts()):the_post();
                        if(!($i%2==0)){$a=rand(4,8);$b=12-$a;}?>
					<div class="col-md-<?php if($i%2==0){echo $a;}else{echo $b;}?>">
						<div class="fh5co-grid animate-box" style="background-image: url(<?php the4_thumb()?>);">
							<a class="image-popup text-center" href="<?php the_permalink()?>">
								<div class="work-title">
									<h3><?php the_title()?></h3>
									<span><?php the_time('r')?></span>
								</div>
							</a>
						</div>
					</div>
                    <?php $i++;endwhile;endif;?>
				</div>
			</div>
		</section>
<?php get_footer()?>
