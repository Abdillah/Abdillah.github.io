<?php

add_action( 'admin_init', 'register_hijri_calendar_settings' );
add_action('admin_menu', 'register_hijri_calendar_menu_page');
define( 'HCAL_DOMAIN', 'hijri-calendar' );

function register_hijri_calendar_menu_page() {

    add_options_page('Hijri Calendar', 'Hijri Calendar', 'add_users', __FILE__, 'hijri_calendar_settings_page', plugins_url('hijri-calendar/images/icon.png'));

    add_submenu_page(__FILE__, __('Usage', HCAL_DOMAIN ), __('Usage', HCAL_DOMAIN ), 'add_users', __FILE__, 'hijri_calendar_usage');

    add_submenu_page(__FILE__, 'Settings', 'Settings', 'manage_options', 'hijri_calendar_settings', 'hijri_calendar_settings_page');

    add_submenu_page(__FILE__, 'Server Information', 'Server Information', 'add_users', 'hijri_calendar_server_info', 'hijri_calendar_server_info_menu');

}

function register_hijri_calendar_settings() {

	//register our settings
    register_setting( 'hijri_calendar-settings-group', 'hcal_options' );
    register_setting( 'hijri_calendar-settings-group', 'language_rplc' );
}

include "admin/sidebar.php";

function hijri_calendar_usage_page() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include "admin/usage.php";
}

function hijri_calendar_settings_page() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include "admin/usage.php";
?>
<br/>
<?php
    include "admin/settings.php";
?>
<br/>
<?php
    include "admin/server_info.php";

}

function hijri_calendar_server_info_page() {
    if ( !current_user_can( 'manage_options' ) )  {
        wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
    }
    include "admin/server_info.php";
}
?>
