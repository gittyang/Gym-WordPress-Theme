<!-- Home Page -->

<?php get_header('front'); ?>

<?php while( have_posts() ): the_post(); ?>

  <!-- Welcome Section -->
  <!-- <p>Hello from front-page.php</p> -->

  <section class="welcome text-center section">
    <h2 class="text-primary"><?php the_field('welcome_heading'); ?></h2>
    <p><?php the_field('welcome_text'); ?></p>
  </section>

  <!-- Area Section -->
  <section class="section-areas">
    <ul class="areas-container">
      <li class="area">
        <?php 
          $area1 = get_field('area_1'); 
          $image = wp_get_attachment_image_src( $area1['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area1['area_name']; ?></p>
      </li>

      <li class="area">
        <?php 
          $area2 = get_field('area_2'); 
          $image = wp_get_attachment_image_src( $area2['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area2['area_name']; ?></p>
      </li>

      <li class="area">
        <?php 
          $area3 = get_field('area_3'); 
          $image = wp_get_attachment_image_src( $area3['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area3['area_name']; ?></p>
      </li>

      <li class="area">
        <?php 
          $area4 = get_field('area_4'); 
          $image = wp_get_attachment_image_src( $area4['area_image'], 'mediumSize')[0];
        ?>
        <img src="<?php echo $image ?>" alt="">
        <p><?php echo $area4['area_name']; ?></p>
      </li>
    </ul>
  </section>

  <!-- Classes Section -->
  <section class="classes-homepage">
    <div class="container section">
      <h2 class="text-primary text-center">Our Classes</h2>

      <!-- This is an include from queries.php -->
      <?php gymfitness_classes_list(4); ?>

      <div class="button-container">
        <a class="button" href="<?php echo get_permalink( get_page_by_title('Classes') ); ?>">
          View All Classes
        </a>
      </div>
    </div>
  </section>


  <!-- Instructors Section -->
  <section class="instructors">
    <div class="container section">
      <h2 class="text-center text-primary">Our Instructors</h2>
      <p class="text-center">Achieve your goals with the help of our expert instructors & personal trainers</p>

      <!-- This function is an "include" located at inc/queries.php in displays the instructors -->
      <?php gymfitness_instructors_list() ?>
    </div>
  </section>


  <!--  Testimonials Sections -->
  <section class="testimonials">
    <h2 class="text-center text-primary">Testimonials</h2>
    <div class="container-testimonials">
      
    <?php gymfitness_testimonial_list(); ?>
    
  </div>
  </section>



<?php endwhile; ?>

<?php get_footer(); ?>


