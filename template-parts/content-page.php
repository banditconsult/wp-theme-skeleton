<article id="post-<?php the_ID();?>" <?php post_class();?> class="page">
	<?php the_title();?>
	<?php while (have_posts()): the_post();?>
		<?php the_content();?>	
	<?php endwhile;?>
</article>