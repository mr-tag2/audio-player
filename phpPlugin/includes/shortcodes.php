<?php

defined( 'ABSPATH' ) || exit;

/**
 * Podcast player
 */
add_shortcode( 'podcast_player', 'podcast_player_shortcode' );


function podcast_player_shortcode( $atts )
{
//    $atts = shortcode_atts( array(
//        'type' => 'episodes',
//    ), $atts );
//
//    $type     = esc_attr( $atts['type'] );
//    $template = BLP_TEMPLATE . $type . '-player.php';
//
//    if ( file_exists( $template ) ) {
//        ob_start();
//        include wp_normalize_path( $template );
//        return ob_get_clean();
//    }

    ?>
    <div class="example">
        <ul class="playlist">
        <?php
        $episodes = get_field('episodes');
        foreach ( $episodes as $number => $episode ) {
            //if ( $number == 0 ) continue;
            $title = $episode['title'];
            $file  = $episode['file'];
            ?>
            <li data-cover="<?php the_post_thumbnail_url(); ?>" data-artist="<?php echo date('Y-m-d'); ?>">
                <a href="<?php echo $file['url']; ?>"><?php echo $title; ?></a>
            </li>
            <?php } ?>
        </ul>
    </div>


    <script>

        jQuery(".example").musicPlayer({
            elements: ['artwork', 'information', 'controls', 'progress', 'time', 'volume'], // ==> This will display in  the order it is inserted
            //elements: [ 'controls' , 'information', 'artwork', 'progress', 'time', 'volume' ],
            //controlElements: ['backward', 'play', 'forward', 'stop'],
            //timeElements: ['current', 'duration'],
            //timeSeparator: " : ", // ==> Only used if two elements in timeElements option
            //infoElements: [  'title', 'artist' ],

            //volume: 10,
            //autoPlay: true,
            //loop: true,

            // onPlay: function () {
            //     jQuery('body').css('background', 'black');
            // },
            // onPause: function () {
            //     jQuery('body').css('background', 'green');
            // },
            // onStop: function () {
            //     jQuery('body').css('background', '#141942');
            // },
            // onFwd: function () {
            //     jQuery('body').css('background', 'white');
            // },
            // onRew: function () {
            //     jQuery('body').css('background', 'blue');
            // },
            // volumeChanged: function () {
            //     jQuery('body').css('background', 'red');
            // },
            // progressChanged: function () {
            //     jQuery('body').css('background', 'orange');
            // },
            // trackClicked: function () {
            //     jQuery('body').css('background', 'brown');
            // },
            // onMute: function () {
            //     jQuery('body').css('background', 'grey');
            // },
        });

    </script>

    <?php
}