<?php global $data; ?>

<section class="sFeatSupport">
    <div class="container">

        <h2 class="sFeatSupport__title h1 h1_underlined h1_centered">
            <?= $data['title']; ?>
        </h2>

        <div class="sFeatSupport__inner">

            <?php
            if ($data['posts']) {
                foreach ($data['posts'] as $post) {
                    setup_postdata($post);
                    get_template_part('template-parts/post-item',null, [
                            'itemTitleTag'	=> 'div'
                    ]);
                }
                wp_reset_postdata();
            }
            ?>

            <div class="sFeatSupport__discord">

                <?php if ($discord = get_field('discord', 'option')) { ?>

                    <div class="sFeatSupport__discordIcon">
                        <?= wp_get_attachment_image($discord['icon']['id']); ?>
                    </div>

                    <div class="sFeatSupport__discordInfo">

                        <h3 class="sFeatSupport__discordTitle">
                            <?= $discord['title']; ?>
                        </h3>

                        <div class="sFeatSupport__discordDesc">
                            <?= $discord['desc']; ?>
                        </div>

                    </div>

                    <div class="sFeatSupport__discordLinks">

                        <?php if ($link = $discord['support_channel_link']) { ?>
                            <a class="sFeatSupport__discordLink sFeatSupport__discordLink_support" href="<?= $link['url']; ?>" target="<?= $link['target'] ?: '_self'; ?>">
                                <span><?= $link['title']; ?></span>
                            </a>
                        <?php } ?>

                        <?php if ($link = $discord['faq_channel_link']) { ?>
                            <a class="sFeatSupport__discordLink sFeatSupport__discordLink_faq" href="<?= $link['url']; ?>" target="<?= $link['target'] ?: '_self'; ?>">
                                <span><?= $link['title']; ?></span>
                            </a>
                        <?php } ?>

                    </div>

                <?php } ?>

            </div>

        </div>

    </div>
</section>