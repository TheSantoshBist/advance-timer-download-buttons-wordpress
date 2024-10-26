=== Download Timer Buttons ===
Contributors: thesantoshbist
Tags: download, timer, redirect, download button, custom link
Requires at least: 6.3
Requires PHP: 7.4
Tested up to: 6.6
Stable tag: 1.3
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Donate link: https://ko-fi.com/santoshbist/

Easily add customizable download buttons with timers to your WordPress posts.

== Description ==
This plugin adds timed download buttons to your posts, allowing users to create custom download buttons with timers that automatically redirect between steps. Perfect for download-centric sites that require time-based access to download links.

### Features:
– Create download buttons with timers.
– Automatically redirect users after the timer completes.
– Customize button text and download links.
– Use shortcodes to place buttons anywhere in your posts or pages.

== Installation ==
1. Upload the `download-timer-buttons` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Use shortcodes to insert buttons:
   – `[bottom_button]` – Adds a button at the bottom of your content.
   – `[top_button]` – Adds a button at the top of your content.
   – `[middle_button link="your-link"]` – Adds a button in the middle with a customizable link.

== Upgrade Notice ==
= 1.3 =
We’ve improved the plugin’s function names to prevent conflicts. This update also ensures better compatibility with WordPress guidelines. Please check your shortcodes to ensure everything works as expected after updating.

== Screenshots ==
1. Example of a download button with a timer in a post.
2. Customization settings in the plugin's admin panel.

== Changelog ==
= 1.3 =
* Updated function names to ensure uniqueness and prevent conflicts across themes and plugins.
* Added prefix (`dtb_`) to all functions for better namespace management.
* Ensured compliance with WordPress plugin guidelines.
* Improved code organization and readability for easier maintenance.

= 1.2 =
* Added multiple button shortcode support.
* Improved JavaScript timer control.

= 1.0 =
* Initial release.

== Frequently Asked Questions ==
= How do I set different links for each post? =
Use the `middle_button` shortcode with a `link` attribute: `[middle_button link="https://example.com"]`.

= Can I customize the timer duration? =
Currently, the timer duration is set in the JavaScript file, but future versions will support custom durations via shortcode attributes.