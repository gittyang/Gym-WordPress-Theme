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