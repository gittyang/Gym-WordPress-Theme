<!-- page.php refers to WordPress Pages -->
<?php get_header(); ?>

<Main class="container page section">

  <?php while(have_posts()): the_post(); ?>
  
    <h1 class="text-center text-primary"><?php the_title(); ?></h1>
  
    <?php 
      if( has_post_thumbnail() ) :
        the_post_thumbnail('blog');
      else:
        echo "<p>No image</p>";
      endif;
    
    ?>

    <div class="text-center">
      <?php the_content(); ?>
    </div>

  
  <?php endwhile; ?>

</Main>


<?php get_footer(); ?>
