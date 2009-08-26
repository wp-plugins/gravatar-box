<?php
/*
Plugin Name: Gravatar Box
Plugin URI: http://ottodestruct.com/blog/wordpress-plugins/gravatar-box
Description: Automatically shows a gravatar box in the comment form
Author: Otto
Version: 1.0.1
Author URI: http://ottodestruct.com
*/
/*
    Copyright 2009  Samuel Wood  (email : otto@ottodestruct.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2, 
    as published by the Free Software Foundation. 
    
    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    
    The license for this software can likely be found here: 
    http://www.gnu.org/licenses/gpl-2.0.html
    
*/

add_action('wp_print_scripts','gravbox_load');
function gravbox_load() {
	// only bother to load stuff on pages where the comment box is likely to be
	if (is_singular() || is_comments_popup()) {
		wp_enqueue_script('jquery-md5', WP_PLUGIN_URL . '/'.dirname( plugin_basename(__FILE__)).'/jquery.md5.js',array('jquery'), '1.0');
		wp_enqueue_script('gravbox', WP_PLUGIN_URL . '/'.dirname( plugin_basename(__FILE__)).'/gravbox.js',array('jquery-md5'), '1.0');
	}
}


function gravbox() {
	echo '<div id="gravbox"></div>';
}
