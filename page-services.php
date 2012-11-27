<?php global $post; 
	$sideImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), true, '' );
?>
<style type="text/css">
			body.inside div.side {	
				background: url(<?php echo $sideImage[0]; ?>) no-repeat 0 0;	
			}
			body.inside div#bd-inner {
/*				this is the background color behind the side image*/
				background-image: url(<?php bloginfo( 'template_directory' );?>/images/services/services-side-color.jpg);
			}
</style>

<?php get_header(); ?>


	
<!-- /body -->
<div id="bd">
	<div id="bd-inner" class="clearfix">
		
		<!-- side -->
		<div class="side">
			<div class="side-box-content"></div>
		</div><!-- /side -->
		
		<!-- main -->
		<div class="main">
			
			<div id="MainContent_0_pnlTitle" class="container">
				<h1 class="title"><?php wp_title("",true); ?></h1>
			</div>	
			
			<div class="element">
				<div id="MainContent_0_0_pnlDiv" class="textElement">
					<!-- page description from editor -->
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
						
						<?php the_content(); ?>

					<?php endwhile; ?>

					<?php else: ?>

						<!-- Article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /Article -->

					<?php endif; ?>

				</div>
			</div>
			
			<div id="services">
				<!-- liv-whole_services custom post type -->
				<?php
					$wp_query= null;
					$wp_query = new WP_Query();
					$args = array(
						'post_type' => 'liv-whole_services',
						'order' => 'DESC'
					);
					$wp_query->query( $args );
				?>

				<?php if ( $wp_query->have_posts() ) : ?>

					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

						<div id="lwService">
							<div class="hr"></div>
							<?php 
								the_post_thumbnail();
								// the_content();  adds <p> tags XXX !!!
								echo get_the_content(); 
							?>
						</div>

					<?php endwhile; ?>

				<?php endif; ?>
				
				<div class="hr"></div>
				
			</div>
			
		</div><!-- /main -->
		
	</div>
</div><!-- /body -->

<?php get_footer(); ?>