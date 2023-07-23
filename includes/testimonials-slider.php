<section class="testimonial-section">
  <div class="container">
    <h4>Client Testimonials</h4>
    <?php $testimonials = get_option('otm_theme_options')['testimonials']; if($testimonials): ?>
    <div class="testimonial-wrapper position-relative px-2">
      <div class="swiper-container testimonial-slider">
        <div class="swiper-wrapper">
           <?php foreach($testimonials as $testimonial): ?>
          <div class="swiper-slide">
            <p class="text-center">“<?php echo $testimonial['testimonial'] ?>”</p>
            <div class="info d-flex flex-wrap justify-content-center">
              <?php if($testimonial['testimonial-author']) { ?>
                <h6 class="text-center w-100 mb-1"><?php echo $testimonial['testimonial-author'] ?></h6>
              <?php } ?>
              <?php if($testimonial['testimonial-date']) { ?>
                <p>
                <strong><?php echo $testimonial['testimonial-date'] ?> - </strong>
                <?php } ?>
                <?php for ($i = 0; $i < $testimonial['testimonial-rating']; $i++) { ?>
                  <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.8043 1.56581L8.08344 7.05987L1.99593 7.94373C0.904268 8.10142 0.466768 9.44174 1.25843 10.2094L5.6626 14.4835L4.62093 20.5211C4.43343 21.6125 5.5876 22.43 6.55427 21.9196L12.0001 19.0688L17.4459 21.9196C18.4126 22.4258 19.5668 21.6125 19.3793 20.5211L18.3376 14.4835L22.7418 10.2094C23.5334 9.44174 23.0959 8.10142 22.0043 7.94373L15.9168 7.05987L13.1959 1.56581C12.7084 0.58651 11.2959 0.574061 10.8043 1.56581Z" fill="#FBBC00"/>
                  </svg>
                <?php } ?>
                </p>
            </div><!--/.info-->
          </div><!--/.swiper-slide-->
          <?php endforeach; ?>
          <?php else: ?>
            <p class="text-center px-lg-5 px-md-4 px-3">No Testimonials.</p>
          <?php endif; ?>

        </div>
      </div><!--/.testimonial-slider-->
      <!-- Add Navigation Arrows -->
      <div class="test-next slider-nav position-absolute text-center bg-none easing"><i class="icon-arrow-right text-secondary easing"></i></div>
      <div class="test-prev slider-nav position-absolute text-center bg-none easing"><i class="icon-arrow-left text-secondary easing"></i></div>
    </div><!--/.testimonial-wrapper-->
  </div><!--/.container-->
</section>
