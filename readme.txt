=== QR Code Generator WP ===
Contributors: xohanniloy017
Tags: qr code, dynamic qr code, qr code generator, shortcode, wordpress  
Requires at least: 5.8
Tested up to: 6.6  
Stable tag: 1.0.0  
Requires PHP: 7.4  
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

### Generate QR Codes using shortcodes in WordPress ###

The **QR Code Generator WP** plugin allows you to create dynamic QR codes using shortcodes. You can customize the QR code's content, size, colors, and more, all from within your WordPress posts or pages.

**Features:**
- Customize the data (URL, text, etc.) embedded in the QR code.
- Set the QR code's color and background color.
- Specify the size of the QR code image.
- Easily generate QR codes through a simple shortcode.
  
Use the following shortcode to generate a QR code:
`[wqrgp_display_qr data="https://example.com" color="000000" bgcolor="FFFFFF" size="400x400"]`

**Example:**
To create a QR code with the text `https://google.com`, use:  
`[wqrgp_display_qr data="https://google.com" color="000000" bgcolor="FFFFFF" size="400x400"]`

**Additional Options:**
- `qzone`: Set the quiet zone (border space around the QR code).
- `margin`: Adjust the margin around the QR code.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/wp-qr-code-generator` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the `[wqrgp_display_qr]` shortcode in your posts or pages to generate a QR code.

== Frequently Asked Questions ==

= How do I generate a QR code? =  
Simply use the shortcode `[wqrgp_display_qr]` and set the parameters for `data`, `color`, `bgcolor`, and `size`. For example:  
`[wqrgp_display_qr data="https://example.com" color="000000" bgcolor="FFFFFF" size="400x400"]`

= Can I customize the color and size of the QR code? =  
Yes, you can customize the QR code by setting the `color`, `bgcolor`, and `size` attributes in the shortcode.

= Does the plugin support dynamic data for QR codes? =  
Yes, the plugin allows you to generate dynamic QR codes by specifying different data values in the shortcode.

= How can I use this plugin to generate multiple QR codes? =  
You can create multiple QR codes by using different shortcodes with varying attributes (e.g., different `data`, `color`, `bgcolor`, etc.).

== Changelog ==

= 1.0.0 =  
* Initial release of the QR Code Generator WP plugin.
* Basic shortcode functionality for generating customizable QR codes.

== Upgrade Notice ==

= 1.0.0 =  
This is the initial version of the plugin. No upgrade actions are required.
