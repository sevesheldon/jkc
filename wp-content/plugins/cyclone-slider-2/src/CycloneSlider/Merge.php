<?php
class CycloneSlider_Merge {

    private $view;
    private $nonce_name;
    private $nonce_action;
    private $plugin;

    public function __construct($view, $plugin){
        $this->view = $view;
        $this->plugin = $plugin;
        $this->nonce_name = 'cycloneslider_merge_nonce';
        $this->nonce_action = 'cycloneslider_merge';
    }

    public function run() {
		
        // Catch Post
        add_action('init', array( $this, 'catch_posts') );

		// Add settings page
		add_action( 'admin_menu', array( $this, 'add_menu_and_page'));
	}
	
	public function add_menu_and_page(){
        
		// Use built-in WP function
		add_submenu_page(
			'edit.php?post_type=cycloneslider',
			__('Cyclone Slider Merge', 'cyclone-slider-2'),
			__('Merge', 'cyclone-slider-2'),
			'manage_options',
			'cycloneslider-merge',
			array( $this, 'render_page')
		);
	}
	
	public function render_page(){
        $nonce_name = 'cycloneslider_merge_nonce';
        $nonce_action = 'cycloneslider_merge';

        $vars = array();
        $vars['nonce_name'] = $this->nonce_name;
		$vars['nonce'] = wp_create_nonce( $this->nonce_action );
		$this->view->render('merge.php', $vars);
	}

    public function catch_posts(){
        $post = $_POST;
        

		// Verify nonce
		if( isset($post[ $this->nonce_name ]) and wp_verify_nonce( $post[ $this->nonce_name ], $this->nonce_action )){
			
			if ( $post['submit'] === 'merge'  ) {
				
                // Check if CS1 is present and remove
                if( is_dir($this->plugin['wp_content_dir'].'/plugins/cyclone-slider')){
                    $this->remdir($this->plugin['wp_content_dir'].'/plugins/cyclone-slider');
                }

                // Copy CS3
                $src = $this->plugin['path'].'src/cyclone-slider';
                $dest = $this->plugin['wp_content_dir'].'/plugins/cyclone-slider';

                $this->recurse_copy(
                    $src,
                    $dest
                );

                // Deactivate CS2
                require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
                deactivate_plugins( 'cyclone-slider-2/cyclone-slider.php', true ); 

                // Activate CS3
                activate_plugin( 'cyclone-slider/cyclone-slider.php', '', false, true ); 
                
                wp_redirect(get_admin_url(NULL, 'plugins.php'));
                exit;
			}
		}
	}

    public function recurse_copy($src, $dst) { 
        $dir = opendir($src); 
        @mkdir($dst); 
        while(false !== ( $file = readdir($dir)) ) { 
            if (( $file != '.' ) && ( $file != '..' )) { 
                if ( is_dir($src . '/' . $file) ) { 
                    $this->recurse_copy($src . '/' . $file,$dst . '/' . $file); 
                } 
                else { 
                    copy($src . '/' . $file,$dst . '/' . $file); 
                } 
            } 
        } 
        closedir($dir); 
    } 

    public function remdir($dir) {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (is_dir($dir."/".$object)) {
                        $this->remdir($dir."/".$object);
                    } else {
                        unlink($dir."/".$object);
                    }
                }
            }
            rmdir($dir); 
        }
    }
}