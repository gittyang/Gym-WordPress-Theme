<!-- page-$slug.php refers to Custom WordPress Pages -->

<p>hello from page-classes.php</p>

<?php get_header(); ?>

<Main class="container page section no-sidebars">

  <?php 
  
  gymfitness_classes_list();
  
  ?>

</Main>

<?php get_footer(); ?>

