<!-- page-$slug.php refers to Custom WordPress Pages -->

<p>hello from page-classes.php</p>

<?php get_header(); ?>

<Main class="container page section no-sidebars">

  <?php 
  
  // This function is an "include" located at inc/queries.php that displays the classes
  gymfitness_classes_list();
  
  ?>

</Main>

<?php get_footer(); ?>

