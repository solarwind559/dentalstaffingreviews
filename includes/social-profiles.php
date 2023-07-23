<?php
  $social_profiles = get_option('otm_theme_options')['social-profiles'];
?>
<ul class="social-links list-unstyled list-inline mx-auto text-center">
<?php if($social_profiles): ?>
  <?php foreach($social_profiles as $social_profile): ?>
  <li class="list-inline-item">
		<a class="easing" href="<?php echo $social_profile['social-profile-url'] ?>" target="_blank" title="<?php echo $social_profile['social-profile'] ?>">
			<?php echo $social_profile['social-profile-icon-custom'] ?>
		</a>
  </li>
  <?php endforeach; ?>
<?php endif; ?>
</ul><!--/.social-links-->




