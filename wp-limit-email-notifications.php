<?php

/*
 * Plugin Name:     Limit Email Notifications
 * Plugin URI:      https://github.com/wvnderlab-agency/wp-limit-email-notifications/
 * Author:          Wvnderlab Agency
 * Author URI:      https://wvnderlab.com
 * Text Domain:     wvnderlab-limit-email-notifications
 * Version:         0.1.0
 */

/**
 *  ################
 *  ##            ##    Copyright (c) 2025 Wvnderlab Agency
 *  ##
 *  ##   ##  ###  ##    ✉️ moin@wvnderlab.com
 *  ##    #### ####     🔗 https://wvnderlab.com
 *  #####  ##  ###
 */

declare(strict_types=1);

namespace WvnderlabAgency\DisableEmailNotifications;

use WP_Automatic_Updater;

defined( 'ABSPATH' ) || die;

// Return early if running in WP-CLI context.
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	return;
}

/**
 * Filter: Limit Email Notifications Enabled
 *
 * @param bool $enabled Whether to enable the limit email notifications functionality. Default true.
 * @return bool
 */
if ( ! apply_filters( 'wvnderlab/limit-email-notifications/enabled', true ) ) {
	return;
}

// Remove email notifications for automated plugin updates.
add_filter( 'auto_plugin_update_send_email', '__return_false' );
// Remove email notifications for password changes.
add_filter( 'send_password_change_email', '__return_false' );

/**
 * Disable notification emails for updates
 *
 * @link   https://developer.wordpress.org/reference/hooks/auto_core_update_send_email/
 * @hooked filter auto_core_update_send_email
 *
 * @param bool   $send        Whether to send the email. Default true.
 * @param string $type        The type of email to send. Can be of 'success', 'fail', 'critical'.
 * @return bool
 */
function disable_core_update_notifications( bool $send, string $type ): bool {

	return 'success' === $type
		? false
		: $send;
}

add_filter( 'auto_core_update_send_email', __NAMESPACE__ . '\\disable_core_update_notifications', PHP_INT_MAX, 2 );
