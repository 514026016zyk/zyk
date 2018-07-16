<?php
/**
 * @package yuuta
 */
?>

<?php if( ! is_single() ) : global $more; $more = 0; endif; //enable more link ?>

<?php if ( ( has_post_thumbnail() && ! post_password_required() ) ) : ?>
	<?php $yuuka_article_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'yuuta_thumb_large' ); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image: url('<?php echo esc_url($yuuka_article_image[0]); ?>'); background-size: cover;">
<?php else : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php endif; ?>

	<div class="hentry__inside">

		<header class="entry-header">
			
			<?php if ( is_sticky() ) { ?>
				<span class="sticky-tag">
					<?php echo esc_html_e('Featured', 'yuuta'); ?>
				</span>
			<?php } ?>
			
			<?php the_content(''); ?>
			<?php yuuta_posted_on(); ?>
			
			<hr>

		</header><!-- .entry-header -->

		<div class="entry-content"></div><!-- .entry-content -->	

		<footer class="entry-footer">

			<?php if ( ! is_single() && ! is_page() ) { ?>

				<?php yuuta_read_leave_comments(); ?>

			<?php } else { ?>
				
				<div class="entry-meta">
					<?php yuuta_entry_footer(); ?>
				</div><!-- .entry-meta -->

			<?php } ?>	

		</footer><!-- .entry-footer -->

	</div>

	
	<div class="overlay light-dark"></div>	

	<?php if ( has_post_thumbnail() ) { ?>
		<a class="bg-control"></a>
	<?php } ?>

</article><!-- #post-## -->