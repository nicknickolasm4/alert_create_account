<?php
/**
 * Plugin Name:          Add registrar-se atacado nos produtos (Nickolas Mariano)
 * Plugin URI:           https://github.com/nicknickolasm4/remove_download_link
 * Description:          Add registrar-se atacado nos produtos
 * Author:               Nickolas Mariano
 * Author URI:           https://github.com/nicknickolasm4/
 * Version:              1.0.0
 * License:              GPLv2 or later
 * WC requires at least: 3.3.0
 * WC tested up to:      8.8.1
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this plugin. If not, see
 * <https://www.gnu.org/licenses/gpl-2.0.txt>.
 *
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function exibir_alert() {
    global $product;

	$link = "./registrar_atacado";
    echo '<p><strong>Ainda não é um fornecedor atacado registrado?</strong> <a href="' . esc_html($link) . '"> Registre-se Agora!</a></p>';
}

add_action('woocommerce_single_product_summary', 'exibir_alert', 25);
