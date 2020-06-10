<!-- page.php refers to Default WordPress Pages -->

<p>hello from page.php</p>

<?php get_header(); ?>

<Main class="container page section no-sidebars">

  <!-- BUG -> $location = NULL/empty -->
  <pre>
    <?php

      var_dump( get_field('location') );

      $location = get_field( "location");
      if( empty($location) ) {
        echo "empty";
      } else {
        echo "full";
      }

      if ( ! empty( $location ) ) {
        echo "field is empty";
        // Field exists in database and has content.
      }
    ?>
  </pre>

  <?php get_template_part('template-parts/page', 'loop'); ?>

</Main>

<?php get_footer(); ?>

