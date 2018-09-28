<?php
/**
 * @package Akismet
 */
/*
Plugin Name: hello plugin
Plugin URI: https://facebook.com/subashsunuwar
Description: A plugin to customise footer
Version: 1.0.0
Author: Rajeev Raj Jain

*/

?>

<?php
add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {
	//parameters details
	 //add_management_page( $page_title, $menu_title, $capability, $menu_slug, $function );
	 //add a new setting page udner setting menu
  //add_management_page('Footer Text', 'Footer Text', 'manage_options', __FILE__, //'footer_text_admin_page');
  //add new menu and its sub menu 
  add_menu_page('Footer Text title', 'Footer Settings', 'manage_options', 'footer_setting_page', 'mt_settings_page');
add_submenu_page( 'footer_setting_page', 'Page title', 'Sub-menu title', 'manage_options', 'child-submenu-handle', 'my_magic_function');
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


<?php
function your_function() {
   echo "<div style='color: red;
    font-size: 30px;
    margin: 20px;'>".get_option('footer_text')."</div>";
}
add_action( 'wp_footer', 'your_function' );
?>