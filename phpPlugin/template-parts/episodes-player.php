<?php

defined( 'ABSPATH' ) || exit;

require_once( ABSPATH . 'wp-admin/includes/media.php' );

$episodes = get_field('episodes');

foreach ( $episodes as $number => $episode ) {
    if ( $number == 0 ) continue;
    $title = $episode['title'];
    $file  = $episode['file'];

    $file_path = get_attached_file( $file['ID'] );
    $file_data = wp_read_audio_metadata( $file_path );
    ?>
    <div class="podcast_episodes">
        <div class="podcast_episode__title">عنوان:
            <?php echo $title; ?>
        </div>
        <div class="podcast_episode__date">زمان بارگذاری:
            <?php echo blp_time_ago( $file['modified'] ); ?>
        </div>
        <div class="podcast_episode__time">مدت زمان:
            <?php echo $file_data['length_formatted']; ?>
        </div>
        <div class="podcast_episode__button">لینک پلی:
            <a href="<?php echo $file['url']; ?>">
                پلی
            </a>
        </div>
        <div>
            <audio controls>
                <source src="<?php echo $file['url']; ?>" type="audio/mpeg">
                مرورگر شما از این فرمت پشتیبانی نمی کند.
            </audio>
        </div>
    </div>
    <hr>
    <?php
}