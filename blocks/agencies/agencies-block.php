<section class="homepage-content py-3">
  <div class="container">
    <div class="row">
    <?php
    // args
    $args = array(
        'post__not_in' => array(get_the_ID()),
        'post_type'		=> 'offices',
        'meta_key'		=> 'show_on_homepage',
        'meta_value'	=> true
    );


    // $posts = get_posts( array(
    //     'meta_query' => array(
    //         array(
    //             'key'   => 'show_in_sidebar',
    //             'value' => '1',
    //         )
    //     )
    // ) );

    // the query
    $the_query = new WP_Query($args); ?>

    <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <!-- <div class="col-12 col-md-4 mb-3">
                <a class="service-link-wrapper" href="<?php //the_permalink(); ?>" title="<?php //the_title(); ?>"><?php //the_title(); ?></a>
            </div> -->

            <?php get_template_part('loops/offices-post'); ?>

<?php //the_title(); ?>             
        <?php endwhile; ?>
        <!-- pagination here -->
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
      <div class="col-12 col-md-4 mb-3">
        <a class="service-link-wrapper get-an-estimate" href="<?php the_permalink(); ?>">
       </a>
      </div>




      
    </div>
  </div>
</section>