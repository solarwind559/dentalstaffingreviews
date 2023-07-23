<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <?php otm_page_header_scripts(); ?>
  <?php otm_page_faq_schema(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Red+Hat+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

<?php otm_custom_js_code_body(); ?>

<?php if (is_front_page()) { ?>
  <div class="home-hero-bg">
<?php }  elseif ((is_page(14) )) { ?>
  <div class="advertise-hero">
<?php } ?>

<header class="header py-3 <?php if (is_front_page() ) : ?>no-header<?php endif;?> <?php if (is_page(14)) : ?>no-header<?php endif;?>">
  <div class="container">
    <div class="row header-height">
      <div class="col-6 col-md-4">
        <?php otm_site_logo('primary'); ?>
      </div><!--/.col-->
      <div class="col-6 d-md-none align-self-center text-right">
        <button class="hamburger navbar-toggler position-relative hamburger--spring mx-auto" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button><!--/.hamburger-->
      </div>
      <div class="col-12 col-md-8 d-flex align-content-center justify-content-center px-0">
        <nav class="navbar w-100 navbar-expand-md px-0">
          <div class="collapse navbar-collapse justify-content-end" id="navbarDropdown">
            <?php
              wp_nav_menu( array(
                'theme_location'  => 'main-menu',
                'container'       => false,
                'menu_class'      => '',
                'items_wrap'      => '<ul id="%1$s" class="navbar-nav w-100 justify-content-end %2$s">%3$s</ul>',
                'depth'           => 3,
                'walker'          => new otm_theme_walker_nav_menu()
              ) );
            ?>
          </div><!--/.collapse-->
        </nav>
      </div><!--/.col-->
    </div><!--/.row-->
  </div><!--/.container-->
</header><!--/.header-->
<?php if (is_front_page()) { ?>
  <div class="home-hero">
    <div class="container">
      <p class="text-white text-center justify-content-center mb-3 text-large">Enter Your Location Below to <strong> View & Compare <br> Dental Staffing Agencies Near You! </strong></p>
      <?php get_template_part('includes/search-form')?>
    </div><!--container-->
  </div><!--/home-hero-->
  </div>
  <?php } elseif(is_page( 14 )) { ?>
  <div class="home-hero">
    <div class="container">
      <h2 class="text-center text-white"><?php echo otm_page_heading(); ?></h2>      
    </div><!--container-->
  </div><!--/home-hero-->
  </div>
<?php } elseif(is_page_template( 'page-templates/page-industry.php')) { ?>
  <div class="home-hero">
    <div class="container">
      <p class="h2"><?php echo otm_page_heading(); ?></p>      
    </div><!--container-->
  </div><!--/home-hero-->
  </div>
<?php }?>