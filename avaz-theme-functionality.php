<?php
/**
 * Plugin Name: Avaz Theme Functionality
 * Plugin URI: https://avaz.ie
 * Description: CPTs, Taxonomies, Widgets, Sidebars & more...
 * Author: RMcC
 * Author URI: https://avaz.ie
 * Version: 1.0
 */
 
include plugin_dir_path( __FILE__ ) . 'custom-post-types/avaz-portfolio.php';

include plugin_dir_path( __FILE__ ) . 'custom-post-types/avaz-services.php';

include plugin_dir_path( __FILE__ ) . 'avaz-sidebars.php';

include plugin_dir_path( __FILE__ ) . 'avaz-breadcrumbs.php';