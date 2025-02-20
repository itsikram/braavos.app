<?php $data = get_field('subscription_form', 'option') ?>

<section class="sSubscribe">
    <div class="container">
        <div class="sSubscribe__inner">
            <div class="sSubscribe__left">

                <h4 class="sSubscribe__title">
                    <?= $data['title'] ?>
                </h4>

                <div class="sSubscribe__desc">
                    <?= $data['description'] ?>
                </div>

                <?= do_shortcode($data['form_shortcode']) ?>

            </div>
            <div class="sSubscribe__right">
                <div class="sSubscribe__image" data-aos="fade-left">

                    <?php
                    if ($data['image']) {
                        wp_get_attachment_image($data['image']['id'], 'medium_large', false, ['alt' => $data['image']['alt']]);
                    }
                    ?>

                    <div class="mts_light_hidden">
                        <?php echo $data['image_svg'] ?>
                    </div>
                   
                    <div class="mts_light_visible">
                        <?php echo $data['image_svg_lightmode'] ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>