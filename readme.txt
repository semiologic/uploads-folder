=== Uploads Folder ===
Contributors: Denis-de-Bernardy, Mike_Koepke
Donate link: http://www.semiologic.com/partners/
Tags: uploads, uploads-folder, uploads folder, cms, semiologic
Requires at least: 3.1
Tested up to: 3.5.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Changes your uploads subfolders to more natural paths that are unique to posts and pages.


== Description ==

The Uploads Folder plugin for WordPress changes your uploads' subfolders to a more natural yyyy/mm/dd/post-slug for posts (based on the post's date rather than the current date), and page-slug/subpage-slug for static pages (based on the page's position in the hierarchy).

= Help Me! =

The [Semiologic forum](http://forum.semiologic.com) is the best place to report issues. Please note, however, that while community members and I do our best to answer all queries, we're assisting you on a voluntary basis.

If you require more dedicated assistance, consider using [Semiologic Pro](http://www.getsemiologic.com).


== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress


== Change Log ==

= 2.1 =

- WP 3.5 compat
- Fix bad variable assignment in uploads-folder lib module

= 2.0.2 =

- Avoid using broken WP functions

= 2.0.1 =

- Remove potential infinite loop when dealing with corrupt data

= 2.0 =

- Complete rewrite
- Repackage the actual script as a library, for use in other plugins
- Localization
- Code enhancements and optimizations
