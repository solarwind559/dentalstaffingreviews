<?php $badges = get_option('otm_theme_options')['badges']; ?>

<div class="badges-section">
  <div class="container">
    <div class="row">
      <?php if($badges) { ?>
        <?php foreach($badges as $badge) { ?>
          <div class="badge-wrapper col-6 col-md-4 col-lg-3 d-flex flex-column align-items-center">
            <?php if (strlen($badge['badge-link']) > 0): ?>
              <a href="<?php echo $badge['badge-link'] ?>" target="_blank" rel="nofollow" title="<?php echo $badge['badge_title'] ?>">
                <?php if ($badge['custom_badge_switcher'] == 0): ?>
                  <picture>
                    <?php if($badge['badge-webp']['url']) {  ?>
                      <source srcset="<?php echo $badge['badge-webp']['url'] ?>" type="image/webp">
                    <?php } ?>
                    <source srcset="<?php echo $badge['badge']['url'] ?>" type="image/jpeg"> 
                    <img src="<?php echo $badge['badge']['url'] ?>" alt="<?php echo $badge['badge']['alt'] ?>" title="<?php echo $badge['badge']['title'] ?>">
                  </picture>
                <?php else: ?>
                  <?php echo $badge['custom_badge'] ?>
                <?php endif ?>
              </a>
            <?php else: ?>
              <?php if ($badge['custom_badge_switcher'] == 0): ?>
                <picture>
                  <?php if($badge['badge-webp']['url']) {  ?>
                    <source srcset="<?php echo $badge['badge-webp']['url'] ?>" type="image/webp">
                  <?php } ?>
                  <source srcset="<?php echo $badge['badge']['url'] ?>" type="image/jpeg"> 
                  <img src="<?php echo $badge['badge']['url'] ?>" alt="<?php echo $badge['badge']['alt'] ?>" title="<?php echo $badge['badge']['title'] ?>">
                </picture>
              <?php else: ?>
                <?php echo $badge['custom_badge'] ?>
              <?php endif ?>
            <?php endif ?>
          </div>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</div>