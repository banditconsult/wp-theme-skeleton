<?php get_header();?>
	<?php if (have_posts()): ?>
		<?php get_template_part('templates-parts/content', 'single');?>
	<?php endif?>
<?php get_footer();?>

