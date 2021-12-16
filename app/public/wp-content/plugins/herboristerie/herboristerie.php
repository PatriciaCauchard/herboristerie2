<?php
/**
 * Plugin Name:     Herboristerie
 * Description:     Plugin de configuration de la partie backend du projet guide herboristerie
 * Author:          Herboristerie
 * Text Domain:     herboristerie
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         herboristerie
 */

 // This is a constant created by Wordpress. If it does not exist the code is not executed via Wordpress then we stop everything.
 if (!defined('ABSPATH')) {
	exit;
}

/**
 * Tous les traitements que nous faisons dans un plugin doivent être rattachés à des hooks de WordPress (ou d'autres plugins)
 */

$plugin_path = plugin_dir_path(__FILE__);

require plugin_dir_path(__FILE__) . 'post-types/plant.php';
require plugin_dir_path( __FILE__ ) . 'roles/administrator.php';
require plugin_dir_path( __FILE__ ) . 'taxonomies/type.php';


register_activation_hook( __FILE__, function() {

	add_administrator_role_capabilities();
} );

register_deactivation_hook( __FILE__, function() {

	remove_administrator_role_capabilities();
} );
