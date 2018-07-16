<?php get_header()?>
<?php  if (have_posts()):while (have_posts()):the_post()?>
    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                    <div class="intro animate-box">
                        <h2><?php the_title()?></h2>
                    </div>
                </div>
            </div>
            <div>
    </section>

    <main id="main">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 animate-box">
                <p><?php the_content()?></p>
            </div>
            <!-- <div class="col-md-4"></div> -->
        </div>
    </main>
<?php endwhile;endif;?>
<?php get_footer()?>

