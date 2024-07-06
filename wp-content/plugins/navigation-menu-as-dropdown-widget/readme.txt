=== Navigation menu as Dropdown Widget ===
Contributors: jeroenpeters1986
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: https://ko-fi.com/jeroenpeters
Tags: dropdown, menu, navigation, select, quicknav
Requires at least: 3.0.1
Requires PHP: 5.3
Tested up to: 6.5.4
Stable tag: 1.5.0

WordPress plugin which provides a widget with a clickable dropdown of a WordPress navigation menu. It supports one level of parent-child menu's.


== Description ==

Convert a Navigation Menu to a dropdown which you visitors can use to navigate to another page.
This can be a nifty element on mobile webpages or just to provide a quick way to navigate to users.

We are proud to be featured on:
 - [WordPress tutorials](https://wpglob.com/blog/)
 - [WP Missing: install the Navigation as dropdown plugin](https://wpmissing.com/plugins/site-dropdown-menu-widget/)
 - The blog of [WordPress survey plugin](https://ays-pro.com/wordpress/survey-maker)

Did you know you can try out this widget using TasteWP?
[Try it out here, without any obligations](https://demo.tastewp.com/navigation-menu-as-dropdown-widget)


== Installation ==

= How do I use this widget? =

If you go to Widgets in the Appearance menu, you will be able to drag-and-drop the
'Navigation menu as dropdown' widget to a place of your choosing.

Please give a title (or not) and select the menu to convert to a dropdown.

= Installing the plugin =

Installation is very easy. You can just download this plugin through the
Plugin Finder in your WordPress Administration Panel. Install and activate
the plugin to make the widget available.


== Frequently Asked Questions ==

= How do I use this widget? =

If you go to Widgets in the Appearance menu, you will be able to drag-and-drop the
'Navigation menu as dropdown' widget to a place of your choosing.

Please give a title (or not) and select the menu to convert to a dropdown.

= Can I also submit a custom start-text? =

Yes you can, when you add the widget you will see that option.

= Can I also preselect the current page? =

Yes you can, there is an option "Preselect the visited page in dropdown" when you add the widget.

= Does this work on all devices? =

Almost. But there are some issues with iOS devices. These do not allow new windows to be opened
when a dropdown has changed. This is a limitation of iOS. To make it work on iOS, links are opened
in the same window.

= Can I customize the appearance / styling of the dropdown? =

Yes you can, with CSS. If you know your way around CSS you might already know that you can
style elements by their class name or HTML structure. We just have a simple select-element
here. The pages inside (option-elements) have classes. For the upper layer it's `pd_tld`,
the second layer has `pd_sld`.

Styling selects still is hard in current browsers, but this is changing.

I do offer help on styling / CSS if you are willing to make a small donation.

= Does it support more than 1 level in linkstructure? =

No, not at this moment. I will work on that. It currently supports one level of parent-child structure.

= Support/Donate =

If you like this plugin and want to support and/or thank me,
[please buy me a coffee](https://www.buymeacoffee.com/jeroenpeters).

= How can I contact you? =

If you have questions about the plugin or if you have ideas to share, the best way
to contact me is through the
[Support Forums](https://wordpress.org/support/plugin/navigation-menu-as-dropdown-widget)

= How can I report security bugs? =

You can report security bugs through the Patchstack Vulnerability Disclosure Program.
The Patchstack team helps validate, triage and handle any security vulnerabilities.
[Report a security vulnerability.](https://patchstack.com/database/vdp/navigation-menu-as-dropdown-widget)

= Who made the icon? =
Icons made by [Freepik](https://www.flaticon.com/authors/freepik) from [Flaticon](https://www.flaticon.com/)


== Screenshots ==

1. The dropdown on the frontend with the selected menu. The current page will be selected by default.
2. How to place the widget from the admin panel


== Changelog ==

= 1.5.0 | June 30, 2024 =
 * Rolled back: 'fix' for iOS, this eventually didn't work
 * Bugfix: When new window option was enabled, iOS devices didn't open a new window (iOS security measure). On iOS, links are now always opened in the same window.
 * Enhancement: Added some explanation about opening a new window/tab on iOS in the FAQ

= 1.4.0 | June 23, 2024 =
 * Bugfix: New window option didn't work on iOS devices
 * Maintenance: WordPress 6.5.4 compatible

= 1.3.5 | March 29, 2024 =
 * Bugfix: XSS vulnerability in the widget title in the WordPress admin
 * Enhancement: Added information about reporting a security issue

= 1.3.4 | March 24, 2024 =
 * Maintenance: WordPress 6.5 compatible
 * Maintenance: Using tags for plugin releases (so it can be rollbacked when needed)

= 1.3.3 | May 20, 2022 =
 * Bugfix: In some cases, the correct title wasn't shown, but prefixed with the site title (since 1.3.2)

= 1.3.2 | May 8, 2022 =
 * Enhancement: Get an alternative title when nothing is available from a custom post
 * Maintenance: Little tweaking in layout of widget configuration
 * Maintenance: WordPress 6.0 compatible

= 1.3.1 | November 27, 2021 =
 * Maintenance: WordPress 5.9 compatible

= 1.3.0 | June 21, 2021 =
 * New feature: ability to truncate entries at X characters
 * Maintenance: WordPress 5.8 compatible

= 1.2.3 | December 8, 2020 =
 * Improvements: Text, explanation and screenshots

= 1.2.2 | November 22, 2020 =
 * Enhancement: Select first option when external link was clicked

= 1.2.1 | November 19, 2020 =
 * Bugfix: Open links when not in new/window

= 1.2 | November 19, 2020 =
 * New feature: choose if the current page should be selected
 * New feature: choose if the pages should be opened in a new tab/window
 * Maintenance: WordPress 5.6 compatible

= 1.1.2 | October 22, 2020 =
 * Fix: compatibility with translate.wordpress.org

= 1.1.1 | October 7, 2020 =
 * New feature: compatibility with translate.wordpress.org

= 1.1.0 | October 7, 2020 =
 * New feature: ability to set the initial value
 * Maintenance: WordPress 5.5 compatible

= 1.0.0 | May 3, 2020 =
* Initial release

