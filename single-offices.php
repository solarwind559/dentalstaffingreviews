<?php get_header(); ?>
<main class="main-content single-offices bg-light pb-3">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) {
      $before = '<div class="breadcrumb-wrap"><p class="breadcrumbs">';
      $after = '</p></div>';
      yoast_breadcrumb( $before, $after);
    } ?>

<?php
    $logo = get_field('logo');
    // $subtitle = get_field('subtitle');
    $location = get_field('location');
    $link = get_field('website_link');
    $stars = get_field('verified_stars');
    $price = get_field('average_price');
    $prof = get_field('professionals_offered');
    $service = get_field_object('services_offered');
      $names = $service['value'];
?>

<section class="agency-card bg-white">
  <div class="container px-0 p-3 p-md-6">

      <div class="row m-auto border-bottom">

        <div class="col-6 col-lg-3 p-0 text-center px-15 align-self-center">
          <?php if ($logo): ?>
            <img class="mb-25 mx-auto" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" subtitle="<?php echo esc_attr($logo['logo']['subtitle'])?>">

          <?php else: ?>
            <img class="mb-25 mx-auto" src="<?php bloginfo('template_url'); ?>/assets/img/no-logo.png" alt="Logo placeholder" subtitle="Logo placeholder">
          <?php endif; ?>	 
          
        </div>


        <div class="col-6 mt-3">
              <h3 class="page-subtitle inner-page-subtitle mb-1">
                <?php otm_page_heading(); ?>
              </h3>
              <div class="stars d-flex flex-row">
                <p class="large-p align-self-center"><span class="font-weight-normal"><?php echo $stars ?>.0 </span> </p>
                    <?php for ($i = 0; $i < $stars; $i++) { ?>
                      <?php get_template_part('assets/img/icons/star'); ?> 
                    <?php } ?> 
                </div> 





        </div><!--.col-8-->

        <div class="col-12 col-lg-3 px-15 mb-3 mb-lg-0">

          <a href="" class="btn btn-blue w-100 mb-1">Request a Quote</a>
          <a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>" class="btn w-100">
            LEARN MORE
          </a>
        </div>

      </div><!--.row-->

      <div class="row py-3 py-md-6 border-bottom">
        <div class="col-12 col-md-4">
          <div class="d-flex">
            <div class="icon mr-15">
              <?php get_template_part('assets/img/icons/price-tag'); ?>
            </div>

            <p class="small-p">Average Price <br> <span class="font-weight-normal"> <?php echo $price; ?></span></p>
      
          </div><!--.d-flex-->
        </div><!--.col-->
        <div class="col-12 col-md-4">
          <div class="d-flex">

            <div class="icon mr-15">
              <?php get_template_part('assets/img/icons/pin'); ?>
            </div>
            <p class="text-left"> <span class="small-p"> Location</span> <br>
              <?php if( $location): ?>
                  <?php foreach( $location as $term ): ?>
                    <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">

                      <span><?php echo esc_html( $term->name ); ?></span>
                    </a>
                  <?php endforeach; ?>
              <?php endif; ?>
            </p>

          </div><!--.d-flex-->
        </div><!--.col-->
        <div class="col-12 col-md-4">

          <div class="d-flex">

            <div class="icon mr-15">
              <?php get_template_part('assets/img/icons/web'); ?>
            </div>

            <div class="web-wrap">
              <p class="text-left mb-0 "> <span class="small-p"> Website</span> <br> </p>
              <?php 
                if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
                <a class="website-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>              
            </div>

          </div><!--.d-flex-->

        </div><!--.col-->
      </div><!--.row-->

      <div class="row pt-3 pb-15 pt-md-6 pb-md-3">
        <div class="col-12">
          <p class="large-p">Professionals Offered:</p>
            <?php
            if( $prof ): ?>
            <ul class="tags mt-1">
                <?php foreach( $prof as $profs ): ?>
                    <li><?php echo $profs; ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>          
        </div>

      </div><!--.row-->

      <div class="row pt-15 pb-3 pt-md-3 pb-md-6 border-bottom">
        <div class="col-12">
          <p class="large-p">Services Offered:</p>

          <?php 
          if( $names ): ?>
            <ul class="tags mt-1">
              <?php foreach( $names as $name ): ?>
                <li>

                <?php echo $service['choices'][ $name ]; ?>
              
                <?php //if( in_array('temp', $service )): ?>
                <!-- //test -->

                <?php //endif; ?>

                <?php
                if ($service['value'] = 'temp' ) :
                ?>
                test
                            <?php endif; ?>          

              
              
              </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>          
        </div><!--.col-->
      </div><!--.row-->

      <div class="row py-t pt-md-6">
        <div class="col-12">
          <p class="large-p">Details</p>
          <p><?php echo the_content();?></p>          
        </div><!--.col-->

      </div><!--.row-->

  </div><!--.container-->
</section>


  </div><!--/.container-->
</main>
<?php get_footer(); ?>
