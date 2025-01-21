<?php
/**
 * Plugin Name: PMS
 * Plugin URI: https://example.com/pms
 * Description: A comprehensive purchase management system for hytech
 * Version: 1.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Jainish Brahmbhatt
 * Author URI: https://example.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: pms
 * Domain Path: /languages
 *
 * @package PMS
 */

// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit;
}
// Register custom roles on plugin activation
register_activation_hook(__FILE__, 'pms_create_roles');

function pms_create_roles() {
    add_role('pms_manager', 'Manager', array(
        'read' => true,
    ));
    
    add_role('pms_finance', 'Finance', array(
        'read' => true,
    ));
    
    add_role('pms_operations', 'Operations', array(
        'read' => true,
    ));
    
    add_role('pms_site_engineer', 'Site Engineers', array(
        'read' => true,
    ));
    
    add_role('pms_customer', 'Customer', array(
        'read' => true,
    ));
}