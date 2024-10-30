=== Just Output ===
Contributors: zipang
Tags: disable,p,br,auto,insert
Requires at least: 4.8.9
Tested up to: 6.6
Stable tag: 0.9.7
Requires PHP: 5.6.0
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

WordPress automatically inserts p and br tags, but disables them in shortcodes.

== Description ==

When you enter the HTML code directly, the layout changes depending on the p and br tags that WordPress automatically inserts.

`remove_filter( 'the_content', 'wpautop' );`

It can be solved by adding the above code.
However, this will disable all auto-inserted p and br tags.
It is not user-friendly.

This plugin can be partially disabled.

Just enter the part you want to disable in the shortcode.

`[jo]your HTML code[/jo]`

The author of this plugin loves text editors.


== Installation ==

1. Upload `just-output` folder into your `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

1. Code edited with a text editor contains extra tags.
2. You can use `Just Output` to remove extra tags.

== Changelog ==

= 0.9.7 =
* Released: January 24, 2024
* fixed: for WordPress6.4 and Classic Editor.

= 0.9.6 =
* Released: June 20, 2022
* fixed: for WordPress6.0 and Classic Editor.

= 0.9.5 =
* Released: January 26, 2021
* Minor fix.
* add Screenshots.

= 0.9.0 =
* Released: January 26, 2021
* New release.

