<?php
$isTop1 = false;
$isTop2 = false;

$webp   = '';

if (isset($args['type'])) {
    if ($args['type'] === 'top1') {
        $isTop1 = true;
    } elseif ($args['type'] === 'top2') {
        $isTop2 = true;
    }
}

$itemTitleTag = 'h4';
if (isset($args['itemTitleTag'])) {
    $itemTitleTag = $args['itemTitleTag'];
}
?>

<div class="postItem <?= $isTop1 ? 'postItem_typeTop1' : ($isTop2 ? 'postItem_typeTop2' : ''); ?>">
    <a href="<?= get_permalink(); ?>">

        <div class="postItem__image">

            <?php
            $imageSize = $isTop1 ? 'large' : 'medium';
            //the_post_thumbnail( $imageSize, ['alt' => get_the_title()] );
            if (isset($args['webp'])) {
                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                if (isset($img[0])) {
                    if (substr($img[0], -4) === 'webp') {
                        $webp_url = $img[0];
                    } else {
                        $img_path_webp = ABSPATH . substr($img[0], strpos($img[0], '/wp-content/')) . '.webp';
                        $webp_url      = file_exists($img_path_webp) ? $img[0] . '.webp' : $img[0];
                    }
                    echo '<img src="' . $webp_url . '" width="300" height="169" alt="' . esc_attr(get_the_title()) . '">';
                }
            } else {
                the_post_thumbnail($imageSize, ['alt' => get_the_title()]);
            }
            ?>

        </div>

        <div class="postItem__info">

            <div class="postItem__content">
                <<?= $itemTitleTag; ?> class="postItem__title"><?php the_title(); ?></<?= $itemTitleTag; ?>>
                <div class="postItem__desc"><?= get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?></div>
            </div>

            <div class="postItem__meta">
                <div class="postItem__category"><?= get_the_category()[0]->name; ?></div>
                <div class="postItem__date"><?= get_the_date('M j, Y'); ?></div>
            </div>

        </div>

    </a>
</div>