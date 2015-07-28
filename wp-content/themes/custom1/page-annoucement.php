<?php get_header(); ?>
<div class="annoucement">
	    	
			<?php
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			?>
			<?php query_posts("cat=7&posts_per_page=1&paged='.$page");?>
			
			<?php if (have_posts()) : ?>
			<table>
			<?php  while (have_posts()) : the_post(); ?>
			
				<tr>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</tr>
			<?php endwhile; ?>
			</table>
		<p><?php next_posts_link(); ?></p>
	<p><?php previous_posts_link(); ?></p>
			<?php else : ?>
			
			  <h3 class="topTitle"><a href="<?php the_permalink() ?>">Blog data nothing</a></h3>
			  <p></p>
			<!-- Closes topPost -->
			
			<?php endif; ?>
	    	
	    </div>
<?php get_footer(); ?>