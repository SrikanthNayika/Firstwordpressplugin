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
  add_menu_page('Footer Text title', 'Footer Settings', 'manage_options',
 'footer_setting_page', 'mt_settings_page');
}


// mt_settings_page() displays the page content for the Test Settings submenu
function mt_settings_page() {
    echo "<h2>" . __( 'Footer Settings Configurations', 'menu-test' ) . "</h2>";
	include_once('footer_settings_page.php');
}
?>
<?php
function your_function() {
   echo "<div style='color: white;
    font-size: 30px;
    background-color: black;
    text-align: center;
    margin: 20px;'>".get_option('footer_text')."</div>";
}
add_action( 'wp_footer', 'your_function' );
?>
