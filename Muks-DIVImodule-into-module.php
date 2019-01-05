<?php
/*
Plugin Name: Muks DIVImodule into module
Plugin URI:  https://github.com/muks999/Module-into-module-plugin.git
Description: The purpose of this plugin is to allow you to embed Divi sections or modules within other Divi modules or anything else that supports shortcodes.
Version:     1.0
Author:      Muks
Author URI:  https://github.com/muks999
License:     GPL2
Muks DIVImodule into module is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
Muks DIVImodule into module is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 */
defined('ABSPATH') or die('No script kiddies please!');
//Shortcode to show the section or module
function show_simple_divi_module_shortcode($moduleid)
{
	extract(shortcode_atts(array('id' => '*'), $moduleid));
	return do_shortcode('[et_pb_section global_module="' . $id . '"][/et_pb_section]');
}
add_shortcode('showmodule', 'show_simple_divi_module_shortcode');
?>