<?php
/*
Plugin Name: Custom Learndash
Description: Custom Learndash
Text Domain: custom-learndash
Version: 1.0.0
*/

define( 'WPLCG_PLUGIN', __FILE__ );
define( 'WPLCG_PLUGIN_BASENAME', plugin_basename( WPLCG_PLUGIN ) );
define( 'WPLCG_PLUGIN_NAME', trim( dirname( WPLCG_PLUGIN_BASENAME ), '/' ) );
define( 'WPLCG_PLUGIN_DIR', untrailingslashit( dirname( WPLCG_PLUGIN ) ) );
define( 'WPLCG_PLUGIN_URL',
	untrailingslashit( plugins_url( '', WPLCG_PLUGIN ) ) );

	
function custom_menu() { 

  add_menu_page( 
      'Learndash Group Creation', 
      'Learndash Group', 
      'manage_options', 
      'learndash_group', 
      'learndash_group_callback_function', 
      'dashicons-media-spreadsheet' 
     );
	 add_submenu_page( 'learndash_group', 'Learndash Group Member', 'Learndash Group Member',
    'manage_options', 'learndash_group_member','learndash_group_memeber_function');
	 add_submenu_page( 'learndash_group', 'Learndash Group Leader', 'Learndash Group Leader',
    'manage_options', 'learndash_group_leader','learndash_group_leader_function');
	add_submenu_page( 'learndash_group', 'Learndash Course', 'Learndash Course',
    'manage_options', 'learndash_course_creation','learndash_course_settings_function');	
	/*add_submenu_page( 'learndash_group', 'Cpe Mointor Course Creation', 'Cpe Mointor Course Creation',
    'manage_options', 'cpe_mointor_course_create','cpe_mointor_course_creation_settings');*/
	add_submenu_page( 'learndash_group', 'Cpe Monitor Course', 'Cpe Monitor Course',
    'manage_options', 'cpe_mointor_course','cpe_mointor_course_settings');
	add_submenu_page( 'learndash_group', 'Learndash Group Settings', 'Learndash Group Settings',
    'manage_options', 'learndash_group_settings','learndash_group_settings_function');
}	
add_action('admin_menu', 'custom_menu');

/*
 * Adding style and script file --Start
 */
add_action( 'admin_footer', 'custom_learndash_callback', 20, 0 );
function custom_learndash_callback() {
	 wp_enqueue_script('learndash_custom_validation', WPLCG_PLUGIN_URL.'/js/jquery.validate.min.js?'.rand());
	 wp_enqueue_script('learndash_custom_script', WPLCG_PLUGIN_URL.'/js/custom_function.js?'.rand()); 	
     wp_enqueue_script('learndash_jquery_ui', WPLCG_PLUGIN_URL.'/js/jquery-ui.js?'.rand());	 
	 wp_enqueue_style('learndash_custom_style', WPLCG_PLUGIN_URL.'/css/custom_style.css?'.rand()); 
	 wp_enqueue_style('learndash_jquery_ui', WPLCG_PLUGIN_URL.'/css/jquery-ui.css?'.rand());	 
}
require_once WPLCG_PLUGIN_DIR . '/learndash_group_function.php';

function cpe_mointor_details() {
	global $wpdb;
	global $db_version;
	$table_name = $wpdb->prefix . 'cpe_mointor_settings';
	$charset_collate = $wpdb->get_charset_collate();
	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		Username varchar(255) NOT NULL,
		Password varchar(255) NOT NULL,
		ProviderNumber varchar(255) NOT NULL,
		created_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		updated_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";	
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );	
	add_option( 'db_version', $db_version );
}
register_activation_hook( __FILE__, 'cpe_mointor_details' );