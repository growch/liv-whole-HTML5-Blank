<?php global $post; 
	$sideImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), true, '' );
?>
<style type="text/css">
			body.inside div.side {	
/*				background: url(<?php echo $sideImage[0]; ?>) no-repeat 0 0;	*/
			}
			body.inside div#bd-inner {
/*				this is the background color behind the side image*/
/*				background-image: url(<?php bloginfo( 'template_directory' );?>/images/workout/move-side-color.jpg);*/
			}
</style>

<?php get_header(); ?>

<div id="home-feature">
	<?php
		if (has_post_thumbnail()) {  
		    the_post_thumbnail();  
		}
	?>
	
	<iframe style="overflow-x: hidden; overflow-y: hidden; width: 100px; height: 21px;" src="http://www.facebook.com/plugins/like.php?app_id=219231888098864&amp;href=www.livwhole.com&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" frameborder="0" scrolling="no" width="320" height="240"></iframe>
	<a class="twitter-share-button" href="http://twitter.com/share" data-via="livWhole" data-count="horizontal">Tweet</a>

</div>	
	
<!-- /body -->
<div id="bd" >
	<div id="bd-inner" class="clearfix">

		<!-- main -->
		<div class="mainHome">
			
			<?php
				$wp_query= null;
				$wp_query = new WP_Query();
				$args = array(
					'post_type' => 'liv-whole_homepage',
					'order' => 'DESC'
				);
				$wp_query->query( $args );
			?>

			<?php if ( $wp_query->have_posts() ) : ?>

				<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

					<!-- <div id="lwHome"> -->
					<h1 class="title homeTitle"><?php the_title(); ?></h1>	
						<?php 
							// the_post_thumbnail();
							// the_content();  adds <p> tags XXX !!!
							echo get_the_content(); 
						?>
					<!-- </div> -->
					
					<div class="hr"></div>

				<?php endwhile; ?>

			<?php endif; ?>
			
		</div><!-- /main -->
		
		<div class="homeSide">
			 <?php get_sidebar(); ?>
		</div><!-- /side -->
		
	</div>
</div><!-- /body -->

<?php get_footer(); ?>

<script language="javascript">
<!--
function doSubmit(oForm) {
	if ("" == oForm.email.value) {
		alert("Email is a required field");
		oForm.email.focus();
		return false;
	} else {
		return true;
	}

	return false;
}
//-->
</script>