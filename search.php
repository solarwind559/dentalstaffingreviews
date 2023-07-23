<?php get_header(); ?>

<main class="main-content pt-3">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) {
      $before = '<div class="breadcrumb-wrap"><p class="breadcrumbs">';
      $after = '</p></div>';
      yoast_breadcrumb( $before, $after);
    } ?>
    <div class="row py-3 py-md-4">

      <div class="col-12 mx-auto">
        <section class="content">
          <h1 class="page-title mb-md-3">Results for: <?php the_search_query(); ?></h1>
            <?php
            get_template_part('loops/search-results');
            if (function_exists('otm_theme_pagination')) { otm_theme_pagination(); }
            elseif ( is_paged() ) { ?>
          <ul class="pagination">
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
</main><!--/.main-content-->
<?php get_footer(); ?>
