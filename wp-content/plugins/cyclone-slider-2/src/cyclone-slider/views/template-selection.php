<?php if(!defined('ABSPATH')) die('Direct access denied.'); ?>
<table class="cs-templates">
	<thead>
		<tr>
			<th width="25%"><?php _e('Name', 'cycloneslider'); ?></th>
			<th width="25%"><?php _e('Supported Slides', 'cycloneslider'); ?></th>
			<th width="25%"><?php _e('Location', 'cycloneslider'); ?></th>
			<th width="25%">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($templates as $id=>$template): ?>
		<tr class="<?php echo ($id==$slider_settings['template']) ? 'active': '' ;?>">
			<td>
				<label for="template-<?php echo esc_attr($id); ?>"><?php echo esc_html($template['name']); ?></label>
			</td>
			<td>
				<?php if(in_array('image', $template['supports'])): ?>
				<a class="boxxy" href="#" data-content="<?php _e('Image', 'cycloneslider'); ?>" title="<?php _e('Image', 'cycloneslider'); ?>">
					<i class="icon-picture"></i>
				</a>
				<?php endif; ?>
				<?php if(in_array('youtube', $template['supports'])): ?>
					<a class="boxxy" href="#" data-content="<?php _e('YouTube', 'cycloneslider'); ?>" title="<?php _e('YouTube', 'cycloneslider'); ?>">
						<i class="icon-youtube-play"></i>
					</a>
				<?php endif; ?>
				<?php if(in_array('vimeo', $template['supports'])): ?>
					<a class="boxxy" href="#" data-content="<?php _e('Vimeo', 'cycloneslider'); ?>" title="<?php _e('Vimeo', 'cycloneslider'); ?>">
						<i class="icon-play"></i>
					</a>
				<?php endif; ?>
				<?php if(in_array('custom', $template['supports'])): ?>
					<a class="boxxy" href="#" data-content="<?php _e('Custom HTML', 'cycloneslider'); ?>" title="<?php _e('Custom HTML', 'cycloneslider'); ?>">
						<i class="icon-code"></i>
					</a>
				<?php endif; ?>
				<?php if(in_array('testimonial', $template['supports'])): ?>
					<a class="boxxy" href="#" data-content="<?php _e('Testimonial', 'cycloneslider'); ?>" title="<?php _e('Testimonial', 'cycloneslider'); ?>">
						<i class="icon-quote-left"></i>
					</a>
				<?php endif; ?>
			</td>
			<td>
				<a class="boxxy" href="#" data-content="<?php echo wp_kses_post($template['location_details']); ?>"><?php echo $template['location_name']; ?></a>
				<?php if( !empty( $template['warning'] ) ): ?>
					<a class="boxxy" href="#" data-content="<?php echo wp_kses_post($template['warning']); ?>" ><i class="icon-warning-sign"></i></a>
				<?php endif; ?>
			</td>
			<td>
				<input <?php checked( $slider_settings['template'], $id); ?> id="template-<?php echo esc_attr($id); ?>" type="radio" name="cycloneslider_settings[template]" value="<?php echo esc_attr($id); ?>" />
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<div class="cs-templates-buttons">
	<a target="_blank" href="http://docs.codefleet.net/cyclone-slider/templating/" class="button-secondary"><i class="icon-book"></i> <?php _e('Learn More About Templates', 'cycloneslider'); ?></a>
	<a target="_blank" href="https://www.codefleet.net/cyclone-slider/templates/" class="button-primary"><i class="icon-plus"></i> <?php _e('More Templates', 'cycloneslider'); ?></a>
</div>