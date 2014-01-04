<?php
/*
Plugin Name: Uploads Folder
Plugin URI: http://www.semiologic.com/software/uploads-folder/
Description: Changes your uploads' subfolders to a more natural yyyy/mm/post-slug for posts (based on the post's date rather than the current date), and page-slug/subpage-slug for static pages (based on the page's position in the hierarchy).
Version: 2.2.1
Author: Denis de Bernardy & Mike Koepke
Author URI: http://www.getsemiologic.com
Text Domain: uploads-folder
Domain Path: /lang
License: Dual licensed under the MIT and GPLv2 licenses
*/

/*
Terms of use
------------

This software is copyright Denis de Bernardy & Mike Koepke, and is distributed under the terms of the MIT and GPLv2 licenses.
**/

if ( !class_exists('uploads_folder') ) {
	include dirname(__FILE__) . '/uploads-folder/uploads-folder.php';
}
