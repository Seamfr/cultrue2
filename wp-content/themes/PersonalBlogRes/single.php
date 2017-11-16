<?php get_header(); ?>	
<div id="main_cont">
	
	<div class="container">
	
	
		<div id="cont_left">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<h1 class="single_title"><?php the_title(); ?></h1>
				
				<div class="single_inside_content">
				
					<?php the_content(); ?>
					
				</div><!--//single_inside_content-->
				
				<br /><br />
				
				<?php comments_template(); ?>							
				
				
				<div class="you_may_like">YOU MAY LIKE</div>
				
				<ul id="mycarousel" class="jcarousel-skin-tango single_may_like">
				
				<?php
				$args = array(
					 'post_type' => 'post',
					 'posts_per_page' => 10,
					 'orderby' => 'rand'
					 );
				query_posts($args);
				$x = 0;
				while (have_posts()) : the_post(); ?>   
					
					
					<li>
						<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
							<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>" frameborder="0" allowfullscreen></iframe>
						<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
							<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=03b3fc" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						<?php } else { ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('may-like-image'); ?></a>
						<?php } ?>							
					
						
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>					
					</li>
				
				<?php $x++; ?>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>   
				</ul>
				<div class="clear"></div>
				
			<?php endwhile; else: ?>
			
				<h3>Sorry, no posts matched your criteria.</h3>
			<?php endif; ?>                    												
			
		</div><!--//cont_left-->
	
		
		
		<div class="clear"></div>
		
	</div><!--//container-->
	
</div><!--//main_cont-->
<?php get_footer(); ?> 