<?php get_header(); ?>
	
<!-- /body -->
<div id="bd" class="gallery">
	<div id="bd-inner" class="clearfix">
		
		<!-- main -->
		<div class="main">
			
			<?php
				$wp_query= null;
				$wp_query = new WP_Query();
				$args = array(
					'post_type' => 'liv-whole_buy',
					'order' => 'DESC'
				);
				$wp_query->query( $args );
			?>

			<?php if ( $wp_query->have_posts() ) : ?>

				<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

					<!-- <div id="lwHome"> -->
					<h1 class="title homeTitle"><?php the_title(); ?></h1>	
						<?php 
							echo get_the_content(); 
						?>
					<!-- </div> -->
					
					<div class="hr"></div>

				<?php endwhile; ?>

			<?php endif; ?>
			
			
			
			
		</div><!-- /main -->
		
		
	</div>
</div><!-- /body -->
	

<?php get_footer(); ?>