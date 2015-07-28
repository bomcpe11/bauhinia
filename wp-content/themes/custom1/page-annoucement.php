<?php get_header(); ?>
<div class="annoucement">
	    	
			
			<?php query_posts("cat=7&posts_per_page=1&post_status=publish,future");?>
			
			<?php if (have_posts()) : ?>
			<table>
			<?php while (have_posts()) : the_post(); ?>
			
				<tr>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
				</tr>
			<?php endwhile; ?>
			</table>
			<?php else : ?>
			
			  <h3 class="topTitle"><a href="<?php the_permalink() ?>">Blog data nothing</a></h3>
			  <p></p>
			<!-- Closes topPost -->
			
			<?php endif; ?>
	    	
	    </div>
<?php get_footer(); ?>