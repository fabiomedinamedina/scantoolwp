<?php
/*
    Plugin Name: Scan Tool WP
    Plugin URI:
    Description: Escanea tu sitio wordpress y lista los temas, plugins. Adicionalmente muestra información como la versión que estas utilizando, URL, entre otros.
    Version: 1.0.0
    Author: Fabio Medina Medina
    Author URI: https://fabiomedina.com
    License: GNU General Public License v2 or later
    License URI: http://www.gnu.org/licenses/gpl-2.0.html
    Text Domain: scan-tool-wp
*/
if (! defined ('ABSPATH')) exit;

/**
 * Variables globales
 */
$stwp_plugin_version = '1.0.0';									    // Versión para utilizar en el administrador
$stwp_plugin_author = 'Fabio Medina Medina';						// Autor para utilizar en el administrador
$plugin_file = plugin_basename(__FILE__);							// Archivo del plugin para referencia
define( 'STWP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );		    // Defino URL del plugin para los enqueue CSS y JS

// Añado mi archivo propio de CSS 
add_action( 'admin_enqueue_scripts', 'stwp_admin_css' );
function stwp_admin_css() {
    wp_enqueue_style( 'stwp-admin', STWP_PLUGIN_URL . 'css/stwp-admin.css' );
}

// Creo el menú en el administrador de wordpress
add_action("admin_menu", "menu_stwp");
function menu_stwp() {
    add_menu_page(
        __( 'Scarn Tool WP', 'scan-tool-wp' ),          // Titulo página
        'Scan Tool WP',                                             // Titulo menú
        'manage_options',
        'stwp',                                                     // Slug 
        '', 
        'dashicons-code-standards',                                 // Icono
        2                                                           // Posición en el menú
    );
    // Menú item Dashboard
    add_submenu_page(
        'stwp',
        __( 'Scarn Tool WP - Dashboard', 'scan-tool-wp' ),          // Titulo página
        __( 'Dashboard', 'scan-tool-wp' ),                          // Titulo del item del menú
        'manage_options',
        'stwp-dashboard',
        'view_dashboard'
    );
    // Menú item About
    add_submenu_page(
        'stwp',
        __( 'Scarn Tool WP - About', 'scan-tool-wp' ),          // Titulo página
        __( 'About', 'scan-tool-wp' ),                          // Titulo del item del menú
        'manage_options',
        'stwp-about',
        'view_about'
    );
    // Elimino el primer item que asigna el menú
    remove_submenu_page( 'stwp', 'stwp' );
}
// Llamo el archivo de la vista de la página Dashboard
function view_dashboard() {
    if ( is_file( plugin_dir_path( __FILE__ ) . 'views/stwp-dashboard.php' ) ) {
        include_once plugin_dir_path( __FILE__ ) . 'views/stwp-dashboard.php';
    }
}
// Llamo el archivo de la vista de la página About
function view_about() {
    echo '<h1>Este es el submenú</h1>';
}




