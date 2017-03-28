<?php
/*
Plugin Name: Provincias de Panamá - Woocommerce
Plugin URI: http://URI_De_La_Página_Que_Describe_el_Plugin_y_Actualizaciones
Description: Este plugin añade las provincias de Panamá.
Version: 1.0
Author: Reynaldo Villarreal
Author URI: http://URI_del_Autor_del_Plugin
License:  GPL2


  	Copyright 2017 Reynaldo_Villarreal  (email : antonios1789@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA


*/

/*FUNCION PARA AGREGAR PROVINCIAS A LA CIUDAD DE PANAMÁ*/
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

function custom_woocommerce_states( $states ) {

  $states['PA'] = array(
    'PA1' => 'Bocas del Toro', 
    'PA2' => 'Coclé',
    'PA3' => 'Colón',
    'PA4' => 'Chiriquí',
    'PA5' => 'Darien',
    'PA6' => 'Herrera',
    'PA7' => 'Los Santos',
    'PA8' => 'Panamá',
    'PA9' => 'Veraguas',
    'PA10' => 'Panamá Oeste'
  );

  return $states;
}



?>