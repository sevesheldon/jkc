<?php if(!defined('ABSPATH')) die('Direct access denied.'); ?>

<div class="wrap">
	<h2><?php _e('Merge', 'cyclone-slider-2'); ?></h2>
	<div class="intro">
		<p><?php _e('Merge will do the following:', 'cyclone-slider-2'); ?></p>
		<ul style="list-style: inside; margin-left: 20px">
			<li><?php _e('If Cyclone Slider 1.0 is present, it will be deleted.', 'cyclone-slider-2'); ?></li>
			<li><?php _e('Cyclone Slider 3.0 will be installed.', 'cyclone-slider-2'); ?></li>
			<li><?php _e('Cyclone Slider 2.0 will be deactivated.', 'cyclone-slider-2'); ?></li>
			<li><?php _e('Cyclone Slider 3.0 will be activated.', 'cyclone-slider-2'); ?></li>
		</ul>
		<p><?php _e('Continue?', 'cyclone-slider-2'); ?></p>
	</div>
	<form method="post">
		<input type="hidden" name="<?php echo $nonce_name; ?>" value="<?php echo $nonce; ?>">
		<button class="button-primary" type="submit" name="submit" value="merge"><?php _e('Merge', 'cyclone-slider-2'); ?></button>
	</form>
	
</div>