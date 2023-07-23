<div class="input-wrapper">
  <form class="form-inline search-form d-flex justify-content-center" role="search" method="get" action="<?php echo home_url('/') ?>" >
    <input class="form-control" type="text" value="<?php get_search_query() ?>" placeholder="<?php echo  esc_attr_x('Find Your Dental Agency', 'otm_theme'); ?>... " name="s" id="s" />
    <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'otm_theme') ?>" class="search-btn"><?php get_template_part('assets/img/icons/search'); ?></button>
  </form>
</div>
