<?php get_header(); ?>
<div class="annoucementhome">
	    	<?php 
    echo do_shortcode("[metaslider id=147]"); 
?>

			<?php query_posts("cat=7&posts_per_page=5");?>
			
			<?php if (have_posts()) : ?>
			
			<?php  while (have_posts()) : the_post(); ?>
			
				<div>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
					<?php 
					$content = get_the_content();
					$content = strip_tags($content);
					echo substr($content, 0, 100);
					?>
					<a href='<?php the_permalink() ?>'>...></a>
					
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			
			  <h3 class="topTitle"><a href="<?php the_permalink() ?>">Blog data nothing</a></h3>
			  <p></p>
			<!-- Closes topPost -->
			
			<?php endif; ?>
			
			<?php wp_reset_query(); ?>
</div>
<div class="coursehome">			
			<?php query_posts("cat=8&posts_per_page=5");?>
			
			<?php if (have_posts()) : ?>
			
			<?php  while (have_posts()) : the_post(); ?>
			
				<div>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
					<?php 
					$content = get_the_content();
					$content = strip_tags($content);
					echo substr($content, 0, 100);
					?>
					<a href='<?php the_permalink() ?>'>...></a>
					
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			
			  <h3 class="topTitle"><a href="<?php the_permalink() ?>">Blog data nothing</a></h3>
			  <p></p>
			<!-- Closes topPost -->
			
			<?php endif; ?>
			
			<?php wp_reset_query(); ?>
</div>
<div class="abouthome">			
			<?php query_posts("cat=9&posts_per_page=5");?>
			
			<?php if (have_posts()) : ?>
			
			<?php  while (have_posts()) : the_post(); ?>
			
				<div>
					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					
					<?php 
					$content = get_the_content();
					$content = strip_tags($content);
					echo substr($content, 0, 100);
					?>
					<a href='<?php the_permalink() ?>'>...></a>
					
				</div>
			<?php endwhile; ?>

			<?php else : ?>
			
			  <h3 class="topTitle"><a href="<?php the_permalink() ?>">Blog data nothing</a></h3>
			  <p></p>
			<!-- Closes topPost -->
			
			<?php endif; ?>
	    	
	    </div>
<?php get_footer(); ?>