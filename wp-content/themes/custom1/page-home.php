<?php function get_first_images($text){
	preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
	return $img[1];
}?>
<?php get_header(); ?>

<section class="othermenu gray-bg">
	<div class="container">
		<div class="row">
		
			<ul>
				<li><a href="#"><span class="icon glyphicon glyphicon-book"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'แนวปฎิบัติวิทยานิพนธ์และการศึกษา':'Thesis'); ?></div></a></li>
				<li><a href="#"><span class="icon glyphicon glyphicon-book"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'ค้นคว้าอิสระ':'Research'); ?></div></a></li>
				<li><a href="#"><span class="icon glyphicon glyphicon-blackboard"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'ผลงานวิชาการ':'Achievement'); ?></div></a></li>
				<li><a href="#"><span class="icon glyphicon glyphicon-thumbs-up"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'FAQ':'FAQ'); ?></div></a></li>
				<li><a href="#"><span class="icon glyphicon glyphicon-user"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'ศิษย์เก่า':'Alumni'); ?></div></a></li>
				<li><a href="#"><span class="icon glyphicon glyphicon-home"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'โครงการบริหารวิชาการ':'Academic Management'); ?></div></a></li>
				<li><a href="#"><span class="icon glyphicon glyphicon-education"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'ประกันคุณภาพการศึกษา':'Education Quality'); ?></div></a></li>
				<li><a href="#"><span class="icon glyphicon glyphicon-education"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'การจัดการความรู้':'Knowledge Management'); ?></div></a></li>
				<li><a href="#"><span class="icon glyphicon glyphicon-warning-sign"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'การจัดการความเสี่ยง':'Risk Management'); ?></div></a></li>
				<li><a href="http://sms-stou.org/pr"><span class="icon glyphicon glyphicon-book"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'วารสารการจัดการสมัยใหม่':'Modern Management Journal'); ?></div></a></li>
				<li><a href="#"><span class="icon glyphicon glyphicon-th-list"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'กระดานสนทนา':'Webboard'); ?></div></a></li>
				<li><a href="#"><span class="icon glyphicon glyphicon-play"></span>
					<br /><div class="topic"><?php echo (qtranxf_getLanguage()=='th'?'ชุดฝึกปฎิบัติเสริมทักษะ':'Training Practice'); ?></div></a></li>
				
			</ul>
		</div>
	</div>
</section>

<section class="annoucementhome">
	<div class="container">
		<!--SECTION HEADER START-->
		<div class="sec-header">
			<h2><?php echo (qtranxf_getLanguage()=='th'?'ข่าวสารประชาสัมพันธ์':'Annoucement'); ?></h2>
			<span class="bullet"></span> <span class="bullet"></span> <span class="bullet"></span>
		</div>
		<!--SECTION HEADER END-->
		<div class="row">
			<?php query_posts("cat=7&posts_per_page=10");?>
			
			<?php if (have_posts()) : ?>
			
			<?php  while (have_posts()) : the_post(); ?>
			<?php 
				$content = get_the_content ();
				$first_img = get_first_images($content);
// 				echo '<img src="'.$first_img.'" />';
			?>
			<div>
				<h4><a href="<?php the_permalink() ?>" target="_blank"><?php the_title(); ?></a></h4>
					
				<div style="padding:0 40px;"><?php echo $content ?></div>

			</div>
			<?php endwhile; ?>
			<?php else : ?>
			
			  <h3 class="topTitle">
				<a href="<?php the_permalink() ?>">Blog data nothing</a>
			</h3>
			<p></p>
			<!-- Closes topPost -->
			
			<?php endif; ?>
			
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>



<section class="coursehome gray-bg">
	<div class="container">
		<!--SECTION HEADER START-->
		<div class="sec-header">
			<h2><?php echo (qtranxf_getLanguage()=='th'?'หลักสูตร':'Our Courses'); ?></h2>
			<span class="bullet"></span> <span class="bullet"></span> <span class="bullet"></span>
		</div>
		<div style="height:10px;"></div>
		<!--SECTION HEADER END-->
		<div class="row elm-2">
			<?php query_posts("cat=71&order=ASC");?>
			
			<?php if (have_posts()) : ?>
			
			<?php  while (have_posts()) : the_post(); ?>
			<?php
				$content = get_the_content ();
				$content = strip_tags ( $content );
			?>
			<!--SERVICE ITEM START-->
			<div class="span4">
				<div class="services">
					<div class="header">
						<i class="fa fa-tablet"></i>
						<i class="fa fa-list-alt inner-icon"></i>
					</div>
					<div class="text">
						<h3><a href="<?php echo $content ?>"><?php echo (qtranxf_getLanguage()=='th'?'ระดับปริญญาเอก':'Doctor of Philosophy'); ?></a></h3>
						<p><a href="<?php echo $content ?>"><?php the_title(); ?></a></p>
					</div>
				</div>
			</div>
			<!--SERVICE ITEM END-->
			
			<?php endwhile; ?>
			<?php else : ?>
			
			<h3 class="topTitle"><a href="<?php the_permalink() ?>">Blog data nothing</a></h3>
			<p></p>
			<!-- Closes topPost -->
			
			<?php endif; ?>
			
			<?php wp_reset_query(); ?>
			
			
		</div>
		<div style="height:20px;"></div>
		<div class="row elm-3">
		
			<?php query_posts("cat=70&order=ASC");?>
			
			<?php if (have_posts()) : ?>
			
			<?php  while (have_posts()) : the_post(); ?>
			<?php
				$content = get_the_content ();
				$content = strip_tags ( $content );
			?>
			<!--SERVICE ITEM START-->
			<div class="span4">
				<div class="services">
					<div class="header">
						<i class="fa fa-tablet"></i>
						<i class="fa fa-list-alt inner-icon"></i>
					</div>
					<div class="text">
						<h3><a href="<?php echo $content ?>"><?php echo (qtranxf_getLanguage()=='th'?'ระดับปริญญาโท':'Master of Arts'); ?></a></h3>
						<p><a href="<?php echo $content ?>"><?php the_title(); ?></a></p>
					</div>
				</div>
			</div>
			<!--SERVICE ITEM END-->
			
			<?php endwhile; ?>
			<?php else : ?>
			
			<h3 class="topTitle"><a href="<?php the_permalink() ?>">Blog data nothing</a></h3>
			<p></p>
			<!-- Closes topPost -->
			
			<?php endif; ?>
			
			<?php wp_reset_query(); ?>
		</div>
		
		<div style="clear:both;"></div>
	</div>
</section>

<section class="downloadhome">
	<div class="container">
		<!--SECTION HEADER START-->
		<div class="sec-header">
			<h2><?php echo (qtranxf_getLanguage()=='th'?'ดาวน์โหลด':'Downloads'); ?></h2>
			<span class="bullet"></span> <span class="bullet"></span> <span class="bullet"></span>
		</div>
		<!--SECTION HEADER END-->
		<div class="row">
			<?php query_posts("cat=9&posts_per_page=5");?>
			
			<?php if (have_posts()) : ?>
			
			<?php  while (have_posts()) : the_post(); ?>
			
			<div>
				<h3><a href="<?php the_permalink() ?>" target="_blank"><?php the_title(); ?></a></h3>
						
						<?php
						$content = get_the_content ();
						$content = strip_tags ( $content );
						echo substr ( $content, 0, 100 );
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
	</div>
</section>


<!--OUR TEACHERS SECTION START-->
<section class="excusiveboard gray-bg">
	<div class="container">
		<!--SECTION HEADER START-->
		<div class="sec-header">
			<h2><?php echo (qtranxf_getLanguage()=='th'?'คณะผู้บริหาร':'Excusive Board'); ?></h2>
			<span class="bullet"></span> <span class="bullet"></span> <span class="bullet"></span>
		</div>
		<!--SECTION HEADER END-->
		<div class="row elm-2">
                
            <?php query_posts("cat=72&order=ASC");?>
			
			<?php if (have_posts()) : ?>
				
				<?php  while (have_posts()) : the_post(); ?>
						<?php
						$content = get_the_content ();
						// $content = strip_tags($content);
						echo $content?>
				<?php endwhile; ?>
	
				<?php else : ?>
				
				  <h3 class="topTitle">
				<a href="<?php the_permalink() ?>">Blog data nothing</a>
			</h3>
			<p></p>
			<!-- Closes topPost -->
				
			<?php endif; ?>
			<?php wp_reset_query(); ?>
<!--TEACHERS THUMB START-->
			<!--div class="span3">
	<div class="teachers">
		<div class="social-icons">
			<!--a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-vimeo-square"></i></a>
		</div>
		<div class="thumb">
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/teachers1.jpg" alt=""></a>
		</div>
		<div class="text">
			<h2><a href="#">Mickey Rorey</a></h2>
			<p>Science Teacher</p>
		</div>
	</div>
</div-->
			<!--TEACHERS THUMB END-->
		</div>
		
		<div class="row elm-4">
                
            <?php query_posts("cat=73&posts_per_page=4&order=ASC");?>
			
			<?php if (have_posts()) : ?>
				
				<?php  while (have_posts()) : the_post(); ?>
						<?php
						$content = get_the_content ();
						// $content = strip_tags($content);
						echo $content?>
				<?php endwhile; ?>
	
				<?php else : ?>
				
				  <h3 class="topTitle">
				<a href="<?php the_permalink() ?>">Blog data nothing</a>
			</h3>
			<p></p>
			<!-- Closes topPost -->
				
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
		
		<div class="row elm-3">
                
            <?php query_posts("cat=73&posts_per_page=4&paged=2&order=ASC");?>
			
			<?php if (have_posts()) : ?>
				
				<?php  while (have_posts()) : the_post(); ?>
						<?php
						$content = get_the_content ();
						// $content = strip_tags($content);
						echo $content?>
				<?php endwhile; ?>
	
				<?php else : ?>
				
				  <h3 class="topTitle">
				<a href="<?php the_permalink() ?>">Blog data nothing</a>
			</h3>
			<p></p>
			<!-- Closes topPost -->
				
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
</section>
<!--OUR TEACHERS SECTION END-->

<section class="galleryhome">
	<div class="container">
		<!--SECTION HEADER START-->
		<div class="sec-header">
			<h2><?php echo (qtranxf_getLanguage()=='th'?'อัลบั้มภาพ':'Photo Gallery'); ?></h2>
			<span class="bullet"></span> <span class="bullet"></span> <span class="bullet"></span>
		</div>
		<!--SECTION HEADER END-->
		<div class="row">
			<?php echo do_shortcode ( "[album id=0 max=1]" );?>
		</div>
	</div>
</section>

<section class="otherlinkhome">
	<div class="container">
		<!--SECTION HEADER START-->
		<div class="sec-header">
			<h2><?php echo (qtranxf_getLanguage()=='th'?'ลิ้งค์อื่นๆ':'Other links'); ?></h2>
			<span class="bullet"></span> <span class="bullet"></span> <span class="bullet"></span>
		</div>
		<!--SECTION HEADER END-->
		<div class="row">
			<div>
				<h4><a href="https://docs.google.com/forms/d/18nGBa2NRwqWX4ePM7HJDymfMpYGKbIwN3s3sXEA9Dbw/viewform?embedded=true" target="_blank"><?php echo (qtranxf_getLanguage()=='th'?'แบบสอบถามความพึงพอใจที่มีต่อเว็บสาขาวิชาวิทยาการจัดการ':'School of Management Web Satisfaction'); ?></a></h4>
			</div>
		</div>
	</div>
</section>

<div style="height: 20px;"></div>
<?php get_footer(); ?>