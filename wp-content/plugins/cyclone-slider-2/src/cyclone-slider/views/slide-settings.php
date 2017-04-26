<div class="cs-slide-settings">
    <div class="expandable-box last">
        <div class="expandable-header"><i class="icon-gear"></i> <?php _e('Slide Properties', 'cycloneslider'); ?></div>
        <div class="expandable-body">
            <div class="field field-inline">
                <label for=""><?php _e('Hidden:', 'cycloneslider'); ?></label>
                <input class="" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][hidden]" type="hidden" value="0" />
                <input class="" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][hidden]" type="checkbox" value="1" <?php checked( $slide['hidden'], '1' ); ?> />
                <div class="clear"></div>
            </div>
            
            <div class="clear"></div>
            
            <div class="field field-inline">
                <label for=""><?php _e('Transition Effects:', 'cycloneslider'); ?></label>
                <select id="" class="cycloneslider_metas_fx" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][fx]">
                    <option value="default"><?php _e('Default', 'cycloneslider'); ?></option>
                    <?php foreach($effects as $value=>$name): ?>
                    <option value="<?php echo esc_attr($value); ?>" <?php echo ($slide['fx']==$value) ? 'selected="selected"' : ''; ?>><?php echo esc_html($name); ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="clear"></div>
            </div>
            
            <div class="field field-inline">
                <label for=""><?php _e('Effects Speed:', 'cycloneslider'); ?></label>
                <input class="widefat cycloneslider-slide-meta-speed" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][speed]" type="number" value="<?php echo esc_attr(@$slide['speed']); ?>" />
                <span class="note"> <?php _e('Milliseconds', 'cycloneslider'); ?></span>
                <div class="clear"></div>
            </div>
            
            <div class="field field-inline">
                <label for=""><?php _e('Next Slide Delay:', 'cycloneslider'); ?></label>
                <input class="widefat cycloneslider-slide-meta-timeout" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][timeout]" type="number" value="<?php echo esc_attr(@$slide['timeout']); ?>" />
                <span class="note"> <?php _e('Milliseconds', 'cycloneslider'); ?></span>
                <div class="clear"></div>
            </div>
            
            
            <div class="cycloneslider-slide-tile-properties">
                
                <div class="field field-inline">
                    <label for=""><?php _e('Tile Count:', 'cycloneslider'); ?></label>
                    <input class="widefat cycloneslider-slide-meta-tile-count" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][tile_count]" type="number" value="<?php echo esc_attr(@$slide['tile_count']); ?>" />
                    <span class="note"> <?php _e('The number of tiles to use in the transition.', 'cycloneslider'); ?></span>
                    <div class="clear"></div>
                </div>
                <!--
                <label for=""><?php _e('Tile Delay:', 'cycloneslider'); ?></label>
                <input class="widefat cycloneslider-slide-meta-tile-delay" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][tile_delay]" type="text" value="<?php echo esc_attr(@$slide['tile_delay']); ?>" />
                <span class="note"> <?php _e('Milliseconds to delay each individual tile transition.', 'cycloneslider'); ?></span>
                <div class="cycloneslider-spacer-15"></div>
                -->
                <div class="field field-inline">
                    <label for=""><?php _e('Tile Position:', 'cycloneslider'); ?></label>
                    <select id="" name="cycloneslider_metas[<?php echo esc_attr($i); ?>][tile_vertical]">
                        <option <?php echo ('true'==$slide['tile_vertical']) ? 'selected="selected"' : ''; ?> value="true"><?php _e('Vertical', 'cycloneslider'); ?></option>
                        <option <?php echo ('false'==$slide['tile_vertical']) ? 'selected="selected"' : ''; ?> value="false"><?php _e('Horizontal', 'cycloneslider'); ?></option>
                    </select>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>
