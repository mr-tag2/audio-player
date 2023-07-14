<?php

defined( 'ABSPATH' ) || exit;

/**
 * Displays date in time ago format
 */
function blp_time_ago( $date ) {
    $date = strtotime( $date . ' Asia/Tehran' );
    $current_time = strtotime( 'now Asia/Tehran' );
    return human_time_diff( $date, $current_time ) . ' قبل';
}