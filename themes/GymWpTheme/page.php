<!-- page.php refers to Default WordPress Pages -->


<?php get_header(); ?>

<Main class="container about page section no-sidebars">

  <?php get_template_part('template-parts/page', 'loop'); ?>

</Main>

<?php get_footer(); ?>

