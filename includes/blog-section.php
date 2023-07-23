<section class="blog-section py-5 py-lg-100">
  <div class="container">
    <div class="title d-flex justify-content-between">
      <h2>Offices</h2>
      <a href="/blog/" class="btn btn-t-blue align-self-center">view all articles</a>
    </div>
    <div class="underline mb-3 mb-lg-6"></div>
    <div class="row">
      <?php
        $blogrow = [
         'post_type' => 'offices',
         'order' => 'DESC',
         'posts_per_page' => '3',
        ];
        $threeposts = new WP_Query( $blogrow );
      ?>
      <?php while($threeposts->have_posts()): $threeposts->the_post(); ?>
      <div class="col-12">
        <div class="card p-0 mb-15 mb-lg-0">
          <?php if(has_post_thumbnail()):?>
          <img class="card-img-top" src="<?php echo the_post_thumbnail_url('medium'); ?>" alt="Image for <?php echo the_title(); ?> post" title="<?php echo the_title(); ?>">
          <?php endif;?>
          <div class="card-block p-25 bg-light">
            <time class="date d-block text-gray"><?php echo the_date('j F Y');?></time>
            <h5 class="card-title text-black mb-2"><?php echo the_title(); ?></h5>
            <a href="<?php the_permalink(); ?>" class="text-uppercase text-primary" title="<?php echo the_title(); ?> - Click to Read More">Learn More</a>
            <div class="underline-blue"></div>
          </div>
        </div><!--/.card-->
      </div><!--/.col-->
      <?php
        endwhile;
        wp_reset_query();
      ?>
    </div><!--/.row-->
  </div><!--/.container-->
</section>