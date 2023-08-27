<article>
	<?php the_title();?>
	<?php while (have_posts()): the_post();?>
		<?php the_content();?></div>
	<?php endwhile;?>
</article>