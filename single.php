<?php

$redirect = get_post_meta( get_queried_object_id(), "Redirect", true );

if ($redirect == "None"):
	echo "haha";
else:
	wp_redirect(get_home_url(), 301);
endif;

exit; 

?>