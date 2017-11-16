<?php get_header(); ?>	
<script type="text/javascript">
$(document).ready(
function($){
  $('#posts_cont').infinitescroll({
 
    navSelector  : "div.load_more_text",            
		   // selector for the paged navigation (it will be hidden)
    nextSelector : "div.load_more_text a:first",    
		   // selector for the NEXT link (to page 2)
    itemSelector : "#posts_cont .post_box"
		   // selector for all items you'll retrieve
  },function(arrayOfNewElems){
  
	$('.media_cont').hover(
		function() {
			$(this).find('.view_more').css('display','block');
		},
		function() {
			$(this).find('.view_more').css('display','none');
		}
	);
  
      //$('.home_post_cont img').hover_caption();
 
     // optional callback when new content is successfully loaded in.
 
     // keyword `this` will refer to the new DOM content that was just added.
     // as of 1.5, `this` matches the element you called the plugin on (e.g. #content)
     //                   all the new elements that were found are passed in as an array
 
  });  
}  
);
</script>	
<div id="main_cont">
	
	<div class="container">
	
		<div id="cont_left">
		
			<div id="posts_cont">
		
				<?php if(is_category()) { ?>
				<div class="archive_title">
					<?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
				</div><!--//archive_title-->
				<div class="clear"></div>
				<?php } ?>		
			
				<?php
				global $wp_query;
				$args = array_merge( $wp_query->query, array( 'posts_per_page' => 4 ) );
				query_posts( $args );        
				$x = 0;
				while (have_posts()) : the_post(); ?>     
					<div class="post_box">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						
					
							<div class="media_cont">
							<?php if(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'youtube') { ?>
								<iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>" frameborder="0" allowfullscreen></iframe>
							<?php } elseif(get_post_meta( get_the_ID(), 'page_featured_type', true ) == 'vimeo') { ?>
								<iframe src="http://player.vimeo.com/video/<?php echo get_post_meta( get_the_ID(), 'page_video_id', true ); ?>?title=0&amp;byline=0&amp;portrait=0&amp;color=03b3fc" width="500" height="338" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
							<?php } else { ?>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image2'); ?></a>
							<?php } ?>				
							<a href="<?php the_permalink(); ?>"></a>
							</div><!--//media_cont-->
							
						<div class="clear"></div>
					</div><!--//post_box-->
				<?php $x++; ?>
				<?php endwhile; ?>
			
			</div><!--//posts_cont-->
			
			<div class="load_more_cont">
				<div align="center"><div class="load_more_text">
				<?php
				ob_start();
				next_posts_link('<img src="' . get_bloginfo('stylesheet_directory') . '/images/loading-button.png" />');
				$buffer = ob_get_contents();
				ob_end_clean();
				if(!empty($buffer)) echo $buffer;
				?>
				</div></div>
			</div><!--//load_more_cont-->     			
			
		</div><!--//cont_left-->
	
		
		
		<div class="clear"></div>
		
	</div><!--//container-->
	
</div><!--//main_cont-->
<?php get_footer(); ?> 