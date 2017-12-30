<?php
/*
Plugin Name: My Plugin
*/

require_once plugin_dir_path( __FILE__ ).wordpress-plugin-settings-template-class.php;

$settings = new WordPress_Plugin_Template_Settings( "My Plugin", "my_plugin", __FILE__ );
