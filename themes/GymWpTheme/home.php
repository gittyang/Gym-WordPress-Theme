<!-- Blog Page -->

<?php get_header(); ?>

<p>hello from home.php</p>

<main class="container page section">
  <?php get_template_part('template-parts/blog', 'loop'); ?>
</main>

<?php get_footer(); ?>

