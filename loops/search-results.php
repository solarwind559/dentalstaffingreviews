<?php
/*
 * The Search Results Loop
 */
?>

<?php
    $logo = get_field('logo');
    $subtitle = get_field('subtitle');
    $location = get_field('location');
    $link = get_field('website_link');
    $stars = get_field('verified_stars');
    $price = get_field('average_price');
    $prof = get_field('professionals_offered');
    $service = get_field_object('services_offered');
      $names = $service['value'];
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div <?php post_class("py-1 px-0 py-md-2 post-block"); ?> >

<section class="agency-card bg-white mb-3">
  <div class="container px-0">
      <div class="row m-auto">

        <div class="col-4 border-right p-3 p-lg-6 text-center">
          <?php if ($logo): ?>
            <img class="mb-25 mx-auto" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" subtitle="<?php echo esc_attr($logo['logo']['subtitle'])?>">

          <?php else: ?>
            <img class="mb-25 mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/no-logo.jpg" alt="Logo placeholder" subtitle="Logo placeholder">
          <?php endif; ?>	 
          
          <p class="text-left mb-3"> <span class="small-p"> Location:</span>
            <?php if( $location): ?>
                <?php foreach( $location as $term ): ?>
                  <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">

                    <span><?php echo esc_html( $term->name ); ?></span>
                  </a>
                <?php endforeach; ?>
            <?php endif; ?>
          </p>

          <a href="" class="btn btn-blue w-100 mb-1">Request a Quote</a>
          <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" class="btn w-100">
            LEARN MORE
          </a>

        </div>

        <div class="col-8 p-3 p-lg-6">

          <div class="row">
            <div class="col-8">
              <h4 class="page-subtitle inner-page-subtitle mb-1">
                <?php otm_page_heading(); ?>
              </h4>
              <p class="subtitle"><?php echo $subtitle;?></p>  

              <?php 
                if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
                <a class="website-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
            </div><!--.col-6-->

            <div class="col-4">
              <div class="d-flex mb-1">
                <p class="small-p">Verified: <span class="font-weight-normal"><?php echo $stars ?>.0 </span> </p>
                <div class="stars d-flex flex-row">
                    <?php for ($i = 0; $i < $stars; $i++) { ?>
                      <?php get_template_part('assets/img/icons/star'); ?> 
                    <?php } ?> 
                </div>       
              </div>
              <p class="small-p">Average Price: <span class="font-weight-normal"> <?php echo $price; ?></span></p>
            </div><!--.col-6-->

          </div><!--.row-->
          <p><?php echo the_content();?></p>
          <p class="small-p mb-1">Professionals Offered:</p>
          <?php
          if( $prof ): ?>
          <ul class="tags mt-1">
              <?php foreach( $prof as $profs ): ?>
                  <li><?php echo $profs; ?></li>
              <?php endforeach; ?>
          </ul>
          <?php endif; ?>

          <p class="small-p mb-1">Services Offered:</p>
          
          <?php 
          if( $names ): ?>
            <ul class="tags mt-1">
                <?php foreach( $names as $name ): ?>
                    <li><?php echo $service['choices'][ $name ]; ?></li>
                <?php endforeach; ?>
            </ul>
          <?php endif; ?>

        </div><!--.col-8-->

      </div><!--.row-->

  </div><!--.container-->
</section>

</div>
<?php endwhile; else: ?>
<div <?php post_class("py-1 px-0 py-md-2 post-block no-results"); ?> >
  <p class="mb-0 p-1 border border-primary d-flex justify-content-center">
    <i class="fas fa-exclamation-triangle text-secondary mr-1"></i> <strong><?php _e('Sorry, your search yielded no results.', 'otm_theme'); ?></strong>
  </p>
</div>
<hr>
<h4>Want to search again?</h4>
<?php get_template_part('includes/search-form');?>
<?php endif; ?>
