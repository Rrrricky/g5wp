<?php
// custom admin style sheet
function my_admin_head() {
	$whodat = get_current_user_id();
	if ($whodat != 1) {
        echo '<link href="'.CSS_URL.'/wp-admin.css" rel="stylesheet" type="text/css">';
    }
}
add_action('admin_head', 'my_admin_head');
?>