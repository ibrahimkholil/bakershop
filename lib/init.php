<?php
require_once get_template_directory() .'/lib/theme_options.php';
require_once get_template_directory() .'/lib/admin-config.php';

/*
 * Include tgm plugin activation class
 */
require_once get_template_directory().'/lib/class-tgm-plugin-activation.php';
require_once get_template_directory().'/lib/require-plugins.php';

if ( ! file_exists( get_template_directory() . '/lib/class-wp-bootstrap-mega-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory().'/lib/class-wp-bootstrap-mega-navwalker.php';
}
