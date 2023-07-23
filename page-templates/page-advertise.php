<?php /* Template Name: Advertise Here Page */?>

<?php get_header(); ?>  

<div class="container advertise-page">
  <?php if ( function_exists('yoast_breadcrumb') ) {
      $before = '<div class="breadcrumb-wrap"><p class="breadcrumbs">';
      $after = '</p></div>';
      yoast_breadcrumb( $before, $after);
    } ?>    
  </div>
<main class="main-content bg-light">    


  <div class="container">

    <section class="content py-7">

        <div class="row">
          <div class="col-12 col-md-10 mx-auto">
            <div class="form-wrapper p-15 mx-auto bg-white p-4 p-md-8">
              <h3 class="mb-15 text-dark">Let’s Work Together</h3>
              <p class="small mb-3">Get your message in front of thousands of our guests. Send us a message to request an advertisement.</p>
              <?php get_template_part('includes/vertical-form')?>
            </div><!--/.form-wrapper-->
          </div><!--/.col-->

        </div><!--/.row-->
      </article>

    </section>
  </div><!--/.container-->
</main>
<?php get_footer(); ?>
