<?php
/**
* Plugin Name: First footer plugin
* Plugin URI: http://www.leftoverscms.com
* Description: First Wordpress Footer Plugin.
* Version: 1.0
* Author: Srikanth Nayika
* Author URI: http://www.leftoverscms.com
**/

?>
<?php
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
	//parameters details
	 //add_management_page( $page_title, $menu_title, $capability, $menu_slug, $function );
	 //add a new setting page udner setting menu
  //add_management_page('Footer Text', 'Footer Text', 'manage_options', __FILE__, //'footer_text_admin_page');
  //add new menu and its sub menu
  add_menu_page('Footer Text title', 'Footer Settings', 'manage_options',
 'footer_setting_page', 'footer_text_admin_page');
add_submenu_page( 'footer_setting_page', 'Page title', 'Sub-menu title',
'manage_options', 'child-submenu-handle', 'my_magic_function');
}

function footer_text_admin_page () {
  echo 'this is where we will edit the variable';
}

// mt_settings_page() displays the page content for the Test Settings submenu
function mt_settings_page() {
    echo "<h2>" . __( 'Footer Settings Configurations', 'menu-test' ) . "</h2>";
	include_once('footer_settings_page.php');
}
?>
