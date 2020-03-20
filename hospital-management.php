<?php
/*
Plugin Name: Estagio Clinica FATEPI
Plugin URI: Site em Construção: "http://renfatepi.unaux.com"
Description: Gerenciador de Tarefas para Hospitais.
Version: 1.0
Author: Renan
Author URI: Site em Construção: "http://renfatepi.unaux.com"
Text Domain: hospital_mgt
Domain Path: /languages/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Copyright 2019  Ren  (email : renanalbu@hotmail.com)
*/
 

define( 'HMS_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

define( 'HMS_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );

define( 'HMS_PLUGIN_URL', untrailingslashit( plugins_url( '', __FILE__ ) ) );
define( 'HMS_CONTENT_URL',  content_url( ));
define( 'HMS_LOG_DIR',  WP_CONTENT_DIR.'/uploads/hospital_logs/');
define( 'HMS_LOG_file', HMS_LOG_DIR.'/hmgt_log.txt' );
require_once HMS_PLUGIN_DIR . '/settings.php';
?>