<?php
/*
Plugin Name:  Aeries SIS
Plugin URI:   https://www.aeries.com
Description:  Enables an API integration with Aeries.
Version:      1.0
Author:       ASuite Sync
Author URI:   https://sync.asuite.cf
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  aeries-sis
*/
add_action( 'aeries', 'aeries' );

function my_plugin_menu() {
	add_options_page( 'Aeries', 'Aeries', 'manage_options', 'aeries', 'aeries' );
}

function aeries(){
	?>
	<div class="wrap">
		<h2>Status:<strong>Setting up</strong></h2>
	</div>
  <div>
  <p>Your integration with Aeries is currently Pending.
  </div>
	<?php
}
