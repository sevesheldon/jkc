<?php if(!defined('ABSPATH')) die('Direct access denied.'); ?>
<div class="cs-slide" data-slide-type="<?php echo esc_attr( $slide['type'] ); ?>" data-slide-hidden="<?php echo esc_attr( $slide['hidden'] ); ?>">
	<div class="cs-header">
		<div class="cs-slide-type">
			<input type="hidden" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][type]" value="<?php esc_attr($slide['type']); ?>">
			<div class="switcher">
				<div class="display">
					<i class="icon-picture"></i><span><?php _e('Image', 'cycloneslider'); ?>
				</div>
				<ul>
					<li data-value="image"><i class="icon-picture"></i><span><?php _e('Image', 'cycloneslider'); ?></span></li>
					<li data-value="youtube"><i class="icon-youtube-play"></i><span><?php _e('YouTube', 'cycloneslider'); ?></span></li>
					<li data-value="vimeo"><i class="icon-play"></i><span><?php _e('Vimeo', 'cycloneslider'); ?></span></li>
					<li data-value="custom"><i class="icon-code"></i><span><?php _e('Custom', 'cycloneslider'); ?></span></li>
					<li data-value="testimonial"><i class="icon-quote-left"></i><span><?php _e('Testimonial', 'cycloneslider'); ?></span></li>
				</ul>
				<i class="icon-sort-down"></i>
			</div>
		</div>
		<span class="cs-title">
			<?php echo esc_html($box_title); ?>
		</span>
		<span class="cs-controls">
			<button class="cs-minimize" type="button" title="<?php _e('Toggle', 'cycloneslider'); ?>">
				<i class="icon-minus"></i>
			</button>
			<button class="cs-delete" type="button" title="<?php _e('Delete', 'cycloneslider'); ?>">
				<i class="icon-remove"></i>
			</button>
		</span>
		<div class="clear"></div>
	</div>
	<div class="cs-body">
		<?php 
		$this->render('slide-settings.php',
			array(
				'i' => $i,
				'slide' => $slide,
				'effects' => $effects
			)
		);
		?>
		<?php $this->render(
			'slide-edit-image.php',
			array(
				'i' => $i,
                'slide' => $slide,
                'image_url' => $image_url,
                'full_image_url' => $full_image_url,
                'box_title' => $box_title,
                'effects' => $effects
			)
		); ?>
		<div class="cs-slide-youtube">
			<div class="field">
				<label for="cs_youtube_url-<?php echo esc_attr($i); ?>" class="cs-changeling-id"><?php _e('YouTube URL:', 'cycloneslider'); ?></label>
				<input id="cs_youtube_url-<?php echo esc_attr($i); ?>" type="text" class="widefat cs-changeling-id cs-youtube-url" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][youtube_url]" value="<?php echo esc_attr($slide['youtube_url']); ?>" />
				<span class="note"><?php _e('Copy and paste a valid YouTube URL here.', 'cycloneslider'); ?></span>
			</div>
			<div class="field field-normal last">
				<input type="hidden" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][youtube_related]" value="false" />
				<input id="cs_youtube_related-<?php echo esc_attr($i); ?>" type="checkbox" class="widefat cs-changeling-id cs-youtube-related" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][youtube_related]" value="true" <?php checked( $slide['youtube_related'], 'false' ); ?> />
				<label for="cs_youtube_related-<?php echo esc_attr($i); ?>" class="cs-changeling-id"><?php _e('Do not show suggested videos when the video finishes.', 'cycloneslider'); ?></label>
			</div>
		</div><!-- // end .cs-slide-youtube -->
		<div class="cs-slide-vimeo">
			<div class="field last">
				<label for=""><?php _e('Vimeo URL:', 'cycloneslider'); ?></label>
				<input type="text" class="widefat cs-vimeo-url" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][vimeo_url]" value="<?php echo esc_attr($slide['vimeo_url']); ?>" />
				<span class="note"><?php _e('Copy and paste a valid Vimeo URL here.', 'cycloneslider'); ?></span>
			</div>
		</div><!-- // end .cs-slide-vimeo -->
		<div class="cs-slide-custom">
			<div class="field last">
				<label for=""><?php _e('Custom HTML', 'cycloneslider'); ?></label>
				<textarea class="widefat cs-custom-html" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][custom]"><?php echo esc_textarea($slide['custom']); ?></textarea>
			</div>
		</div><!-- // end .cs-slide-custom -->
		
		<div class="cs-slide-testimonial">
			<div class="cs-testimonial-quote">
				<div class="field last">
					<label for=""><?php _e('Quote', 'cycloneslider'); ?></label>
					<textarea class="widefat cs-testimonial" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][testimonial]"><?php echo esc_textarea($slide['testimonial']); ?></textarea>
				</div>
			</div><!-- // end .cs-testimonial-quote -->
			<div class="cs-quote-properties">
				<div class="expandable-box">
					<div class="expandable-header first"><?php _e('Author', 'cycloneslider'); ?></div>
					<div class="expandable-body">
						<div class="field last">
							<label for=""><?php _e('Name:', 'cycloneslider'); ?></label> <br>
							<input class="widefat" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][testimonial_author]" type="text" value="<?php echo esc_attr($slide['testimonial_author']); ?>" />
						</div>
					</div>
				</div>
				<div class="expandable-box last">
					<div class="expandable-header"><?php _e('Link', 'cycloneslider'); ?></div>
					<div class="expandable-body">
						<div class="field">
							<label for=""><?php _e('Link URL:', 'cycloneslider'); ?></label> <br>
							<input class="widefat" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][testimonial_link]" type="text" value="<?php echo esc_url($slide['testimonial_link']); ?>" />
						</div>
						<div class="field last">
							<label for=""><?php _e('Open Link in:', 'cycloneslider'); ?></label> <br>
							<select class="" id="" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][testimonial_link_target]">
								<option <?php selected( $slide['testimonial_link_target'], '_self' ); ?> value="_self"><?php _e('Same Window', 'cycloneslider'); ?></option>
								<option <?php selected( $slide['testimonial_link_target'], '_blank' ); ?> value="_blank"><?php _e('New Tab or Window', 'cycloneslider'); ?></option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div><!-- // end .cs-slide-testimonial -->
	</div><!-- // end .cs-body -->
</div><!-- // end .cs-slide -->