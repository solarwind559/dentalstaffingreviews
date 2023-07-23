<?php get_header(); ?>
<main class="main-content">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { ?>
    <section class="breadcrumb-wrap">
      <?php yoast_breadcrumb('<p class="breadcrumbs">','</p>'); ?>
    </section><!--/.breadcrumb-wrap-->
    <?php } ?>
    <section class="content">
      <?php get_template_part('loops/404'); ?>
    </section><!--/.content-->
  </div><!--/.container-->
</main><!--/.main-content-->
<?php get_footer(); ?>
