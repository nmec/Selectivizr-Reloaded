<?php
/*************************************************************************
Plugin Name:	Selectivizr Reloaded
Plugin URI:		http://nmecdesign.com
Description:	A jQuery polyfill to add CSS3 Selector support for IE8 & earlier.
Version:		1.0
Author:			Jonathan Warren
Author URI:		http://nmecdesign.com
**************************************************************************/

add_action('wp_enqueue_scripts', 'Selectivizr_jQuery');
function Selectivizr_jQuery() {
	wp_enqueue_script('jquery');
}

add_action('wp_head', 'Selectivizr');
function Selectivizr() { ?>
	<!--[if (gte IE 6)&(lte IE 8)]>
		<script src="<?php echo plugins_url('/js/selectivizr.js'); ?>"></script>
	<![endif]-->
<?php } ?>