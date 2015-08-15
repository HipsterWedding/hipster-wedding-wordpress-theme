<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="wrapper">
        <div class="main-img"><?php echo get_the_post_thumbnail($post_id, 'header-image'); ?></div> 
        
    
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>
    </div><!-- /.wrapper -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>