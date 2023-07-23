<?php get_header(); ?>
<main class="main-content">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) {
      $before = '<div class="breadcrumb-wrap"><p class="breadcrumbs">';
      $after = '</p></div>';
      yoast_breadcrumb( $before, $after);
    } ?>
    <section class="content">
      <?php get_template_part('loops/page-content'); ?>
    </section><!--/.content-->
  </div><!--/.container-->
</main>
<?php get_footer(); ?>
