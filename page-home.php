<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="wrapper">
      <img class="main-img" src="http://wedding-pictures.onewed.com/match/images/19344/rustic-wedding-reception-real-weddings-dessert-table-wedding-flower-centerpieces.original.jpg?1379120106" alt="a rustic wedding table">

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