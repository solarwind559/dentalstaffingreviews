<?php
/*
All the functions are in the PHP files in the `functions/` folder.
*/

if ( !defined('ABSPATH') ) { exit; }

require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/navbar.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/search-widget.php';
require get_template_directory() . '/functions/index-pagination.php';
require get_template_directory() . '/functions/single-split-pagination.php';
require get_template_directory() . '/functions/otm-theme.php';
require get_template_directory() . '/functions/schema-generator.php';
require get_template_directory() . '/functions/post-types.php';
require get_template_directory() . '/functions/register-blocks.php';
require get_template_directory() . '/functions/register-blocks-categories.php';


//Breadcrumb custom separator
function filter_wpseo_breadcrumb_separator($this_options_breadcrumbs_sep) {
    if (is_page(14)){
        return '<img src="/wp-content/themes/dentalstaffingreviews/assets/img/icons/sep-white.svg" />';
    }
    else {
        return '<img src="/wp-content/themes/dentalstaffingreviews/assets/img/icons/separator.svg" />';
    }
};
// add the filter
add_filter('wpseo_breadcrumb_separator', 'filter_wpseo_breadcrumb_separator', 10, 1);