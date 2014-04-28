<?php
/*
  Plugin Name: Jetpack Development Mode
  Version: 0.0.1
  Plugin URI: http://voceconnect.com/
  Description: Turn on Jetpack Development Mode
  Author: Voce Platforms
  Author URI: http://voceconnect.com/
 */

add_filter( 'jetpack_development_mode', '__return_true' );
define( 'JETPACK_DEV_DEBUG', true );