<?php
/**
 * Template part for displaying head elements such as Google Analytics.
 *
 * @package Therosessom
 */

 $header_scripts = get_option('header_scripts');

if( $header_scripts ){ echo $header_scripts; }
?>