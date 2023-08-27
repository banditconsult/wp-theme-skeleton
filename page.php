<?php get_header();?>
	<section class="row">
		<?php if (have_posts()): ?>
			<?php get_template_part('template-parts/content', 'page');?>
		<?php endif?>
	</section>
<?php get_footer();?>