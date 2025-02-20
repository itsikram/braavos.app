<?php global $data; ?>

<section class="sFeatVideo">
    <div class="container">
        <div class="sFeatVideo__inner">

            <div id="feature-video-player" class="sFeatVideo__player" data-video-id="<?= $data['youtube_video_id']; ?>"></div>

            <div id="feature-video-preview" class="sFeatVideo__preview">
                <?php
                if ($data['cover_image']) {
                    echo wp_get_attachment_image($data['cover_image']['id'], 'full');
                }
                ?>
            </div>

        </div>
    </div>
</section>