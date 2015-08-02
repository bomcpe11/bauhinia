<?php get_header(); ?>
<div class="annoucement">
	    	
			<?php
			$pagenum = get_query_var('paged',1);
			
			?>
			<?php query_posts("cat=8&posts_per_page=10&paged=$pagenum");?>
			
			<?php if (have_posts()) : ?>
			<table>
			<?php  while (have_posts()) : the_post(); ?>
			
				<tr>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small></h3>
					
					<?php 
					$content = get_the_content();
					$content = strip_tags($content);
					echo substr($content, 0, 100);
					?>
					<a href='<?php the_permalink() ?>'>...></a>
					
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