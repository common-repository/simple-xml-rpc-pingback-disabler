<?php
/*
Plugin Name: Simple XML-RPC Pingback Disabler
Plugin URI: https://wordpress.org/plugins/simple-xml-rpc-pingback-disabler
Description: This plugin simply disables only the XML-RPC API Pingback Methods used by hackers on a WordPress site, providing an easy and simple way to disable/enable XML-RPC API Pingback Methods without completely disabling the XML-RPC API, which is used by some plugins and applications (i.e. mobile apps or a few Jetpack modules).
Version: 1.1.0
Author: Vikash Chand
Author URI: http://vikash.ch
License: GPLv2

@package Simple XML-RPC Pingback Disabler
*/

/*  
Copyright 2020  Vikash Chand  (http://vikash.ch/#contact/)

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; If not, see <http://www.gnu.org/licenses/>.
*/

add_filter('xmlrpc_methods', 'spd_unset_xmlrpc_methods');

/*
Unset XML-RPC Methods.
@param array $methods Array of current XML-RPC methods.
*/
function spd_unset_xmlrpc_methods($methods)
{
	unset($methods['pingback.ping']);
	unset($methods['pingback.extensions.getPingbacks']);
	return $methods;
}

/*
Check WP version.
*/
if (version_compare($wp_version, '4.4') >= 0) {
	add_action('wp', 'spd_remove_x_pingback_header_wp_new');
} else {
	add_filter('wp_headers', 'spd_remove_x_pingback_header_wp_old');
}

/*
Remove X-Pingback from Header for newer WP versions; 4.4+.
*/
function spd_remove_x_pingback_header_wp_new()
{
	header_remove('X-Pingback');
}

/*
Remove X-Pingback from Header for older WP versions.
@param array $headers Array with current headers.
*/
function spd_remove_x_pingback_header_wp_old($headers)
{
	unset($headers['X-Pingback']);
	return $headers;
}
?>