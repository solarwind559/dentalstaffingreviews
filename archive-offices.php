<?php get_header(); ?>

<main class="main-content">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) {
      $before = '<div class="breadcrumb-wrap"><p class="breadcrumbs">';
      $after = '</p></div>';
      yoast_breadcrumb( $before, $after);
    } ?>
    <div class="row">

      <div class="col-12">
        <section class="content">
          <h1 class="page-title"><?php echo the_archive_title(); ?></h1>
            <?php
            get_template_part('loops/offices-loop');
            if (function_exists('otm_theme_pagination')) { otm_theme_pagination(); }
            elseif ( is_paged() ) { ?>
          <ul class="pagination d-flex justify-content-center">
            <li class="page-item older">
              <?php next_posts_link('<i class="fas fa-arrow-left"></i> ' . __('Previous', 'otm_theme')) ?></li>
            <li class="page-item newer">
              <?php previous_posts_link(__('Next', 'otm_theme') . ' <i class="fas fa-arrow-right"></i>') ?></li>
          </ul><!--/.pagination-->
          <?php } ?>
        </section><!--/.content-->
      </div><!--/.col-->



    </div><!--/.row-->
  </div><!--/.container-->
</main>
<?php get_footer(); ?>
