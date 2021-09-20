<?php
/**
 * Plugin Name:       Tacocat Spelled Backwards
 * Plugin URI:        https://github.com/GeoJunkie/tacocat
 * Description:       It reverses text. Just for fun.
 * Version:           1.0.0
 * Requires at least: TBD
 * Requires PHP:      TBD
 * Author:            Mike Straw
 * Author URI:        https://github.com/GeoJunkie/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tacocat
 * Domain Path:       /assets/lang
 */

 namespace Tacocat;

 /*
Copyright (C) 2021 Mike Straw

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

define ('TACOCAT_DIR', plugin_dir_path(__FILE__));

register_activation_hook( __FILE__, function () {
    require_once TACOCAT_DIR . 'src/class-activator.php';
    Activator::activate();
});

register_deactivation_hook( __FILE__, function(){
    require_once TACOCAT_DIR . 'src/class-deactivator.php';
});
