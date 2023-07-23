<footer class="footer bg-light">
  <div class="container pt-3 pb-5 py-lg-3 footer-top pl-lg-0">
    <div class="row">
      <div class="col-12 col-md-4">
        <?php otm_site_logo('secondary'); ?>
      </div><!--/.col-->

      <div class="col-12 col-md-8 align-self-center">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'footer-menu',
          'container'       => false,
          'menu_class'      => '',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav w-100 justify-content-end %2$s">%3$s</ul>',
          'depth'           => 3,
          'walker'          => new otm_theme_walker_nav_menu()
        ) );
      ?>
      </div>    
    </div>    
  </div>

  <div class="copyright bg-dark">
    <div class="container">
      <?php if(is_active_sidebar('footer-widget-area')): ?>
        <?php dynamic_sidebar('footer-widget-area'); ?>
        <hr>
      <?php endif; ?>
      <div class="row copyright py-2">
        <div class="col-12 col-lg-6 d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <p class="mb-1 m-lg-0 text-white"><?php echo otm_copyright_text(); ?></p>
        </div>
        <div class="col-12 col-lg-6">
          <a class="branding d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end" href="https://www.onthemapmarketing.com/industries/law-firm-seo/" target="_blank" title="Lawyer SEO">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/otm/otm-logo-horizontal-light.svg" alt="Logo of On The Map Inc." title="On The Map Inc.">
          </a>
        </div>
      </div>
    </div><!--/.container-->
  </div>

</footer>

<?php wp_footer(); ?>
<?php otm_page_footer_scripts(); ?>
</body>
</html>
