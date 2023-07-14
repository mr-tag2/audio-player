<?php

defined( 'ABSPATH' ) || exit;

/**
 * Frontend Assets
 */
add_action( 'wp_enqueue_scripts', 'blp_enqueue_scripts' );

function blp_enqueue_scripts() {
    wp_enqueue_style( 'blp-front', trailingslashit( BLP_ASSETS ) . 'css/front.css' );
    wp_enqueue_style( 'blp-player', trailingslashit( BLP_ASSETS ) . 'css/player.css' );
    wp_enqueue_script( 'blp-front', trailingslashit( BLP_ASSETS ) . "js/front.js", array('jquery'), '1.0', false );
    wp_enqueue_script( 'blp-player', trailingslashit( BLP_ASSETS ) . "js/player.js", array('jquery'), '1.0', false );
    //wp_localize_script( 'blp-front', 'BLP_values', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

/**
 * Backend Assets
 */
add_action( 'admin_enqueue_scripts', 'blp_admin_enqueue_scripts');

function blp_admin_enqueue_scripts() {
    wp_enqueue_style( 'blp-admin', trailingslashit( BLP_ASSETS ) . 'css/admin.css', array() );
    wp_enqueue_script( 'blp-admin', trailingslashit( BLP_ASSETS ) . 'js/admin.js', array('jquery'), '1.0', false );
}