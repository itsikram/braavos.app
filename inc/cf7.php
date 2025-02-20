<?php

/**
 * Remove p and br tags in CF7 form
 */
add_filter('wpcf7_autop_or_not', '__return_false');

?>