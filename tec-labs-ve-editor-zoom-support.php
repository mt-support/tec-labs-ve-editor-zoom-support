<?php
/**
 * Plugin Name:       The Events Calendar: Virtual Events - Editor Zoom Support
 * Plugin URI:        https://theeventscalendar.com/extensions/ve-editor-zoom-support
 * GitHub Plugin URI: https://github.com/mt-support/tec-labs-ve-editor-zoom-support
 * Description:       Allows the editor role to be able to create and manage Zoom Meetings.
 * Version:           0.5
 * Author:            The Events Calendar
 * Author URI:        https://evnt.is/1971
 * License:           GPL version 3 or any later version
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Requires at least: 4.9
 * Tested up to:      5.8.1
 * Requires PHP:      5.6
 *
 *     This plugin is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     any later version.
 *
 *     This plugin is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *     GNU General Public License for more details.
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

add_filter( 'tribe_events_virtual_zoom_admin_ajax_capability', function ( $capability ) {
	return 'edit_private_tribe_events';
}, 20 );
