<?php get_header(); ?>
      <div class="bg-white p-2 text-center mb-3 buttons-block">

      <div class="d-flex justify-content-center">

      <p class="align-self-center mb-0 mr-1"><strong>Sort by: </strong></p>

        <div class="dropdown">
          <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Price
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">$</a>
            <a class="dropdown-item" href="#">$$</a>
            <a class="dropdown-item" href="#">$$$</a>
          </div>
        </div>

        <div class="btn">Location</div>
        <div class="btn">A-Z</div>
      </div><!--.d-flex-->
    </div><!--.bg-white-->
<main class="main-content">
  <div class="container">
    <section class="content">
      <?php //get_template_part('loops/page-content'); ?>
      <?php //get_template_part('loops/offices-post'); ?>
      <?php get_template_part('blocks/agencies/agencies-block'); ?>
    </section><!--/.content-->
  </div><!--/.container-->
</main><!--/.main-content-->

<?php //get_template_part('includes/testimonials-slider')?>
<?php //get_template_part('includes/contact')?>


<?php get_footer(); ?>
