<?php //index.php is the last resort template, if no other templates match ?>
<div class="blog-header"> <?php get_header(); ?></div>

<div class="main">
  <div class="container">
  	<div class="wrapper clearfix">
 

  <!-- 		<div class="main-img">
  			<?php $thumb_id = get_post_thumbnail_id();
  			$thumb_url_array = wp_get_attachment_image_src($thumb_id, "header-image", true);
  			$thumb_url = $thumb_url_array[0]?>
  			<img src="<?php echo $thumb_url ?>" alt="">
  		</div>  -->
  	  
  	 


	    <div class="content">
	    		<?php get_template_part( 'loop', 'index' );	?>
	    </div> <!--/.content -->

	    <?php get_sidebar(); ?>

	</div><!-- /.wrapper -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>