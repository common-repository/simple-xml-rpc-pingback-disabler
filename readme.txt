=== Simple XML-RPC Pingback Disabler ===
Contributors: vikichand
Author URI: https://vikash.ch/
Donate link: http://vikash.ch/
Tags: xmlrpc, xml-rpc, xml, rpc, ddos, attack, firewall, security
Requires at least: 4.8+
Tested up to: 5.7.2
Requires PHP: 5.6
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin simply disables **only** the [XML-RPC API](http://xmlrpc.com/) **Pingback Methods** used by hackers on a WordPress site, providing an easy and simple way to disable/enable XML-RPC API Pingback Methods without completely disabling the XML-RPC API, which is used by some plugins and applications (i.e. mobile apps or a few Jetpack modules).

== Description ==

= What Is xmlrpc.php? =

[XML-RPC](http://www.xmlrpc.com/) is a remote procedure call (RPC) protocol, a feature included in WordPress, which enables data to be transmitted. It uses HTTP as the transport mechanism, and XML to encode its calls.

Unless you use remote technologies and mobile applications to update your WordPress site, you might not be familiar with XML-RPC. For the uninitiated, you can use xmlrpc.php to establish a remote connection to WordPress, and make updates to your site without directly logging in to your WordPress system. 

XML-RPC is indeed useful for enabling remote connections between various external applications and WordPress. On the other hand, disabling this feature can help improve your site’s security.

= Why You Should Disable xmlrpc.php? =

The problem is that xmlrpc.php poses a security risk. It creates an additional access point to your site, which could leave it vulnerable to external attacks. Every time you authenticate XML-RPC, you need to supply your username and password. As you can imagine, this isn’t exactly ideal for security purposes.

For example, in order to prevent brute force attacks, you can limit login attempts on your WordPress site. However, with XML-RPC enabled, that limit does not exist. There’s no capping on login attempts, which means it’s only a matter of time before a determined cybercriminal gains access.

By disabling the feature, you are closing a potential area of entry for hackers.

XML-RPC functionality is turned on by default since WordPress 3.5. This plugin simply disables only the XML-RPC API Pingback Methods used by hackers on a WordPress site, providing an easy and simple way to disable/enable XML-RPC API Pingback Methods without completely disabling the XML-RPC API, which is used by some plugins and applications (i.e. mobile apps or a few Jetpack modules).

= Features =

Removes the following methods from the XML-RPC API interface.

* pingback.ping
* pingback.extensions.getPingbacks
* X-Pingback from HTTP headers

= Requirements =

* WordPress 3.8.1 or higher.
    	
== Installation ==

1. Upload the simple-xml-rpc-disabler directory to the `/wp-content/plugins/` directory in your WordPress installation
1. Activate the plugin through the 'Plugins' menu in WordPress
1. XML-RPC Pingback Methods are now disabled!

To re-enable XML-RPC, just deactivate the plugin through the 'Plugins' menu in WordPress.

== FAQ ==

= Why this plugin? =

This plugin disables **only** the XML-RPC API **Pingback Methods** that can be used by hackers on a WordPress site, providing an easy and simple way to disable/enable XML-RPC API Pingback Methods without completely disabling the XML-RPC API, which is used by some plugins and applications (i.e. mobile apps or a few Jetpack modules).

= How to know if the plugin is working? =

You can try the [XML-RPC Validator](http://xmlrpc.eritreo.it/), written by Danilo Ercoli. Keep in mind that you want the validator to fail and tell you that XML-RPC services are disabled.

= Plugin seems broken ... =

If the plugin is activated, but XML-RPC appears to still be enabled or if the plugin is deactivated, but XML-RPC appears to still be disabled, then it's possible that another plugin or the theme functions is affecting the xmlrpc_enabled filter. Additionally, server configurations could be blocking XML-RPC (i.e. blocking access to xmlrpc.php with the .htaccess file).

`
<Files xmlrpc.php>
Order allow,deny
Deny from all
Allow from 123.123.123.123
</Files>
`

= Will disabling XML-RPC affect SEO? =

The XML-RPC API or xmlrpc.php for WordPress, has nothing to do with SEO.

== Screenshots ==

1. Simple XML-RPC Disabler

== Changelog ==

= 1.0.0 =
* Initial release

= 1.1.0 =
* Tested ready for WordPress 5.7.0+

== Upgrade Notice ==

= 1.1.0 =
* Tested ready for WordPress 5.7.0+