<?php
/**
 * Plugin Name:      Shortcode
 * Plugin URI:       
 * Description:      
 * Version:           1.0.0
 * Author:            Komal Arora
 * Author URI:     https:/casabona.org/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


 function get_copyright_line() {
	return '&copy; 2003 - ' . date('Y');
 }



function copyright_shortcodes_init(){
	add_shortcode('copyright', 'get_copyright_line');
}

add_action('init', 'copyright_shortcodes_init');

//Shortt will be [copyright], this is what you need to paste in Block editor section

 