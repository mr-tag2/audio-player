<?php

defined( 'ABSPATH' ) || exit;

$episode = get_field('episodes')[0];

$title = $episode['title'];
$file  = $episode['file'];
?>
<div class="podcast_episodes">
    <div class="podcast_episode__title">عنوان:
        <?php echo $title; ?>
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